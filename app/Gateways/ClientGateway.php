<?php

namespace App\Gateways;

use DB;

class ClientGateway
{
    public function getServices($name, $city)
    {
        $services = DB::select('SELECT services.id AS service_id, businesses.name AS business_name,
        businesses.address, businesses.city, businesses.postal_code, businesses.country, businesses.state, 
        services.name AS services_name, services.category, services.price_hourly, services.price, services.description, 
        business_hours.days, business_hours.start_times AS start_time, business_hours.end_times AS end_time,
        clients.mobile, clients.email FROM businesses 
        INNER JOIN services ON businesses.id = services.business 
        INNER JOIN business_hours ON services.business_hours = business_hours.id
        INNER JOIN clients ON clients.id = businesses.client;');

        for ($i = 0; $i < count($services); $i++) {
            if (!preg_match('/.*' . $name . '.*/i', $services[$i]->services_name)) {
                array_splice($services, $i, 1);
                $i = $i - 1;
            }

            if($i >= 0) {
                if (!preg_match('/.*' . $city . '.*/i', $services[$i]->city)) {
                    array_splice($services, $i, 1);
                    $i = $i - 1;
                }
            }
        }

        for($i = 0; $i < count($services); $i++) {
            if(!($i >= count($services)))
                $img = DB::table('images')->where('portfolio', $services[$i]->service_id)->get();
                $services[$i]->stars = $this->avgStars($services[$i]->service_id);
                $services[$i]->reviews = count($this->getReview($services[$i]->service_id));
                $theImg = null;

                foreach($img as $imgName) {
                    if($imgName->name) {
                        $theImg = $imgName->name;
                        break;
                    }
                }
                if($imgName)
                    $services[$i]->image_url = $theImg;
        }

        return $services;
    }

    public function register($firstName, $lastName, $email, $password, $mobile)
    {
        if ($mobile[0] != 1) {
            $mobile = '1' . $mobile;
        }

        return DB::table('clients')->insert(
            array("first_name" => $firstName, "last_name" => $lastName, "email" => $email, "password" => $password, "mobile" => $mobile)
        );
    }

    public function getService($id)
    {
        return DB::select('SELECT services.id AS service_id, businesses.name AS business_name,
        businesses.address, businesses.city, businesses.postal_code, businesses.country, businesses.state, 
        services.name AS services_name, services.category, services.price_hourly, services.price, services.description, 
        business_hours.days, business_hours.start_times AS start_time, business_hours.end_times AS end_time,
        clients.mobile, clients.email FROM businesses 
        INNER JOIN services ON businesses.id = services.business 
        INNER JOIN business_hours ON services.business_hours = business_hours.id
        INNER JOIN clients ON clients.id = businesses.client WHERE services.id = ' . $id . ';')[0];
    }

    public function getImage($id)
    {
        $img = DB::table('images')->where('portfolio', $id)->get();
        $theImg = null;

        foreach($img as $imgName) {
            if($imgName->name) {
                $theImg = $imgName->name;
                break;
            }
        }

        return $theImg;
    }

    public function getReview($id)
    {
        return DB::select('SELECT services.id AS service_id, reviews.id AS review_id, 
        reviews.reviewer_id AS reviewer_id, reviews.stars, reviews.text, reviews.date_time,
        services.name AS services_name, services.category, services.price_hourly, services.price, services.description, 
        clients.mobile, clients.email, clients.first_name, clients.image FROM reviews 
        INNER JOIN services ON reviews.service_id = services.id 
        INNER JOIN clients ON clients.id = reviews.reviewer_id WHERE services.id = ' . $id . ';');
    }

    public function reviewById($id)
    {
        return DB::select('SELECT services.id AS service_id, reviews.id AS review_id, 
        reviews.reviewer_id AS reviewer_id, reviews.stars, reviews.text, reviews.date_time,
        services.name AS services_name, services.category, services.price_hourly, services.price, services.description, 
        clients.mobile, clients.email, clients.first_name, clients.image FROM reviews 
        INNER JOIN services ON reviews.service_id = services.id 
        INNER JOIN clients ON clients.id = reviews.reviewer_id WHERE clients.id = ' . $id . ';');
    }

    public function deleteReview($id)
    {
        return DB::table('reviews')->where('id', $id)->delete();
    }

    public function avgStars($id)
    {
        return DB::table('reviews')->where('service_id', $id)->avg('stars');
    }

    public function authenticate($email)
    {
        return DB::table('clients')
            ->where('email', $email)
            ->first();
    }

    public function updateClientInfo($id, $first_name, $last_name, $mobile)
    {
        return DB::table('clients')->where('id', $id)->update(
            array("first_name" => $first_name, "last_name" => $last_name, "mobile" => $mobile)
        );
    }

    public function getPsw($id)
    {
        return DB::table('clients')->where('id', $id)->value('password');
    }

    public function updatePsw($id, $password)
    {
        return DB::table('clients')->where('id', $id)->update(
            array("password" => $password)
        );
    }

    public function updateImage($id, $image)
    {
        $imagePath = DB::table('clients')->where('id', $id)->value('image');
        if ($imagePath != null && file_exists($imagePath)) {
            unlink($imagePath);
        }
        return DB::table('clients')->where('id', $id)->update(
            array("image" => $image)
        );
    }

    public function deleteImage($id)
    {

        $imagePath = DB::table('clients')->where('id', $id)->value('image');

        if ($imagePath != null)
            unlink($imagePath);
        session()->forget('image');
        return DB::table('clients')->where('id', $id)->update(
            array("image" => NULL)
        );

    }

    public function book($id, $date, $start, $end, $notes, $price)
    {
        return DB::table('bookings')->insert(
            array("service_id" => $id, "user_id" => session()->get('id'), "date" => $date, "start" => $start, "end" => $end, "notes" => $notes, "price" => $price, "confirmed" => 0)
        );
    }

    public function portfolio($id)
    {
        return DB::select('SELECT * FROM images WHERE portfolio = ' . $id . ';');
    }

    public function unlikePost($postid)
    {
        DB::table('likes')->where([
            ['user_id', session()->get('id')],
            ['post_id', $postid],
        ])->delete();
    }

    public function likePost($postid)
    {
        DB::table('likes')->insert(
            ['user_id' => session()->get('id'), 'post_id' => $postid]
        );
    }

    public function isPostLiked($postid)
    {
        $result = DB::table('likes')->where([
            ['user_id', session()->get('id')],
            ['post_id', $postid],
        ])->first();

        return !empty($result);
    }

    public function getPostsByService($serviceid)
    {
        $userid = session()->get('id');
        return DB::select('
        SELECT 
            s.id AS service_id, 
            s.name, 
            s.category,
            p.title, 
            p.id AS post_id, 
            p.text, 
            p.url, 
            p.image,
            l.id AS like_id,
            COUNT(i.id) AS like_count 
        FROM posts p
        LEFT JOIN likes l 
            ON l.post_id = p.id AND l.user_id = ' . $userid . ' 
        LEFT JOIN likes i
            ON i.post_id = p.id 
        INNER JOIN services s 
            ON p.service_id = s.id AND s.id = ' . $serviceid . '
        GROUP BY s.id, s.name, s.category, p.title, p.id, p.text, p.url, p.image, l.id'
        );
    }

    public function getPostsPreviewByService($serviceid)
    {
        return DB::select('
        SELECT 
            s.id AS service_id, 
            s.name, 
            p.title, 
            p.id AS post_id 
        FROM posts p 
        INNER JOIN services s
            ON p.service_id = s.id AND s.id = ' . $serviceid
        );
    }

    public function getPostContent($postid)
    {
        $userid = session()->get('id');
        return DB::select('
        SELECT 
            s.id AS service_id, 
            s.name, 
            s.category,
            p.title, 
            p.id AS post_id, 
            p.text, 
            p.url, 
            p.image,
            l.id AS like_id,
            COUNT(i.id) AS like_count 
        FROM posts p
        LEFT JOIN likes l 
            ON l.post_id = p.id AND l.user_id = ' . $userid . ' 
        LEFT JOIN likes i
            ON i.post_id = p.id 
        INNER JOIN services s 
            ON p.service_id = s.id
        WHERE p.id = ' . $postid . '
        GROUP BY s.id, s.name, s.category, p.title, p.id, p.text, p.url, p.image, l.id'
        )[0];
    }

    public function getPostsAndCommentsByService($serviceid) {
        $userid = session()->get('id');
        $posts = DB::select('
        SELECT 
            s.id AS service_id, 
            s.name, 
            s.category,
            p.title, 
            p.id AS post_id, 
            p.text, 
            p.url, 
            p.image,
            l.id AS like_id,
            COUNT(i.id) AS like_count 
        FROM posts p
        LEFT JOIN likes l 
            ON l.post_id = p.id AND l.user_id = ' . $userid . ' 
        LEFT JOIN likes i
            ON i.post_id = p.id 
        INNER JOIN services s 
            ON p.service_id = s.id
        WHERE s.id = ' . $serviceid . '
        GROUP BY s.id, s.name, s.category, p.title, p.id, p.text, p.url, p.image, l.id'
        );
        foreach($posts as &$post) {
            $post->comments = $this->getPostComments($post->post_id);
        }
        error_log(print_r($posts, true));
        return $posts;
    }

    public function insertPostComment($postid, $text)
    {
        $date = date("Y-m-d H:i:s");
        $userid = session()->get('id');

        DB::table('comments')->insert(
            [
                'commenter_id' => $userid,
                'post_id' => $postid,
                'date_time' => $date,
                'text' => $text,
            ]
        );
    }

    public function getPostComments($postid)
    {
        // Gets ALL the comments :)
        return DB::select('
            SELECT 
                co.id,
                co.date_time,
                co.text,
                cl.first_name,
                cl.last_name,
                cl.image 
            FROM comments co
            INNER JOIN clients cl
                ON cl.id = co.commenter_id
            WHERE co.post_id = ' . $postid . '
            ORDER BY co.date_time DESC
        ');
    }

    public function review($serviceId, $review, $rating, $time)
    {
        return DB::table('reviews')->insert(
            array("reviewer_id" => session()->get('id'), "service_id" => $serviceId, "text" => $review, "stars" => $rating, "date_time" => $time)
        );
    }

    //Favorite related

    public function fav($service_id, $sessionId)
    {
        return DB::table('favorites')->insert(
            array("service_id" => $service_id, "client_id" => $sessionId)
        );
    }

    public function unfav($service_id, $sessionId)
    {
        return DB::table('favorites')->where([
            ['service_id', $service_id],
            ['client_id', $sessionId]
        ])->delete();
    }

    public static function isFav($service_id) {
        $result = DB::table('favorites')->where([
            ['service_id', $service_id],
            ['client_id', session()->get('id')]
        ])->first();
        if(empty($result)) {
            return true;
        } else {
            return false;
        }
    }

    public function getFavorites($id){
        $data = DB::select('
            SELECT
                services.id AS service_id, services.name AS service_name, services.category, 
                services.price_hourly, services.price, services.description, services.business_hours, 
                services.business
            FROM services
            INNER JOIN favorites ON services.id = favorites.service_id
            WHERE client_id = ' . $id . ';'
        );

        $favorites = [];

        foreach($data as $fav) {
            $fav->image_name = $this->getImage($fav->service_id);
            $fav->stars = $this->avgStars($fav->service_id);
            array_push($favorites, $fav);
        }

        return $favorites;
    }

    public function getBooking($id) {
        $data = DB::select('SELECT bookings.id AS booking_id, clients.id AS client_id, 
        bookings.user_id, bookings.service_id, bookings.date, bookings.start, bookings.end, 
        bookings.notes, bookings.confirmed, bookings.price, services.name AS service_name, services.id AS service_id,
        clients.mobile, clients.email, businesses.id AS business_id, businesses.name AS business_name, 
        businesses.address, businesses.city, businesses.postal_code, businesses.country, 
        businesses.state FROM bookings 
        INNER JOIN clients ON bookings.user_id = clients.id 
        INNER JOIN services ON bookings.service_id = services.id
        INNER JOIN businesses ON services.business = businesses.id WHERE clients.id = ' . $id . ';');

        $bookings = [];

        foreach($data as $books) {
            $books->image_name = $this->getImage($books->service_id);
            array_push($bookings, $books);
        }

        return $bookings;
    }
}
