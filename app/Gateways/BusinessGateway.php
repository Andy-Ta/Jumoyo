<?php

namespace App\Gateways;

use DB;
use Exception;

class BusinessGateway
{
    public function register($name, $address, $city, $postalCode, $country, $state, $phoneNumber, $token)
    {
        $val = DB::table('businesses')->insertGetId(
            array("name" => $name, "address" => $address, "city" => $city, "postal_code" => $postalCode, "country" => $country,
                "state" => $state, "phone_number" => $phoneNumber , "token" => $token, "client" => session()->get('id'))
        );

        session(['businessid' => DB::table('businesses')->where('client', session()->get('id'))->value('id')]);

        return $val;
    }

    public function editBusiness($id, $name, $email, $mobile, $address, $city, $postal_code, $state, $country, $phone_number , $facebook, $twitter, $instagram) {
        return DB::table('businesses')->
            where('id', $id)->
                update(array(
                    "name" => $name,
                    "address" => $address,
                    "city" => $city,
                    "postal_code" => $postal_code,
                    "state" => $state,
                    "phone_number" => $phone_number,
                    "country" => $country
                    )
                );
    }

    public function addService($category, $name, $price, $priceHourly, $desc, $businessHours) {
        $businessId = DB::table('businesses')->where('client', session()->get('id'))->first()->id;

        $bHId = $this->submitBusinessHours($businessHours);

        return DB::table('services')->insertGetId(
            array("name"=>$name,"category"=>$category,"price"=>$price,"price_hourly"=>$priceHourly,"description"=>$desc,
                "business"=>$businessId, "business_hours"=>$bHId)
        );
    }

    public function editMyService($serviceId, $category, $name, $price, $priceHourly, $desc) {
        if($price == "")
            $price = null;
        if($priceHourly == "")
            $priceHourly = null;

        $query = "UPDATE services SET name = '$name', category = '$category', price = $price, price_hourly = $priceHourly, description = '$desc' WHERE id = $serviceId;";

        return DB::select($query);
        /*return DB::table('services')->
            where('id', $serviceId)->
            update(array(
                "name"=>$name,
                "category"=>$category,
                "price"=>$price,
                "price_hourly"=>$priceHourly,
                "description"=>$desc
            )
        );*/

    }

    private function submitBusinessHours($businessHours) {
        $businessDays = array(0, 0, 0, 0, 0, 0, 0);
        $businessStart = array("0", "0", "0", "0", "0", "0", "0");
        $businessEnd = array("0", "0", "0", "0", "0", "0", "0");

        if(!$businessHours)
            $businessHours = [];

        // Could be simplified
        foreach ($businessHours as $bH) {
            switch ($bH->day) {
                case "sunday":
                    $businessDays[0]++;
                    $businessStart[0] = $bH->startTime;
                    $businessEnd[0] = $bH->endTime;
                    break;
                case "monday":
                    $businessDays[1]++;
                    $businessStart[1] = $bH->startTime;
                    $businessEnd[1] = $bH->endTime;
                    break;
                case "tuesday":
                    $businessDays[2]++;
                    $businessStart[2] = $bH->startTime;
                    $businessEnd[2] = $bH->endTime;
                    break;
                case "wednesday":
                    $businessDays[3]++;
                    $businessStart[3] = $bH->startTime;
                    $businessEnd[3] = $bH->endTime;
                    break;
                case "thursday":
                    $businessDays[4]++;
                    $businessStart[4] = $bH->startTime;
                    $businessEnd[4] = $bH->endTime;
                    break;
                case "friday":
                    $businessDays[5]++;
                    $businessStart[5] = $bH->startTime;
                    $businessEnd[5] = $bH->endTime;
                    break;
                case "saturday":
                    $businessDays[6]++;
                    $businessStart[6] = $bH->startTime;
                    $businessEnd[6] = $bH->endTime;
                    break;
            }
        }

        $businessDaysString = "";
        $businessStartString = "";
        $businessEndString = "";

        for ($i = 0; $i < count($businessDays); $i++) {
            $businessDaysString = $businessDaysString . $businessDays[$i];
            $businessStartString = $businessStartString . " " . $businessStart[$i];
            $businessEndString = $businessEndString . " " . $businessEnd[$i];
        }


        $success = DB::table('business_hours')->insertGetId(
            array("days" => $businessDaysString, "start_times" => $businessStartString, "end_times" => $businessEndString)
        );

        return $success;
    }

    private function editBusinessHours($businessHours) {
        $businessDays = array(0, 0, 0, 0, 0, 0, 0);
        $businessStart = array("0", "0", "0", "0", "0", "0", "0");
        $businessEnd = array("0", "0", "0", "0", "0", "0", "0");

        // Could be simplified
        foreach ($businessHours as $bH) {
            switch($bH->day) {
                case "sunday":
                    $businessDays[0]++;
                    $businessStart[0] = $bH->startTime;
                    $businessEnd[0] = $bH->endTime;
                    break;
                case "monday":
                    $businessDays[1]++;
                    $businessStart[1] = $bH->startTime;
                    $businessEnd[1] = $bH->endTime;
                    break;
                case "tuesday":
                    $businessDays[2]++;
                    $businessStart[2] = $bH->startTime;
                    $businessEnd[2] = $bH->endTime;
                    break;
                case "wednesday":
                    $businessDays[3]++;
                    $businessStart[3] = $bH->startTime;
                    $businessEnd[3] = $bH->endTime;
                    break;
                case "thursday":
                    $businessDays[4]++;
                    $businessStart[4] = $bH->startTime;
                    $businessEnd[4] = $bH->endTime;
                    break;
                case "friday":
                    $businessDays[5]++;
                    $businessStart[5] = $bH->startTime;
                    $businessEnd[5] = $bH->endTime;
                    break;
                case "saturday":
                    $businessDays[6]++;
                    $businessStart[6] = $bH->startTime;
                    $businessEnd[6] = $bH->endTime;
                    break;
            }
        }

        $businessDaysString = "";
        $businessStartString = "";
        $businessEndString = "";

        for($i = 0; $i < count($businessDays); $i++) {
            $businessDaysString = $businessDaysString . $businessDays[$i];
            $businessStartString = $businessStartString . " " . $businessStart[$i];
            $businessEndString = $businessEndString . " " . $businessEnd[$i];
        }


        $success = DB::table('business_hours')->updateOrInsert(
            array("days"=>$businessDaysString,"start_times"=>$businessStartString,"end_times"=>$businessEndString)
        );

        return $success;
    }

    public function getContacts()
    {
        $businessID = $this->getBusinessID();

        $contacts = DB::table('contacts')->where('business', $businessID)->get();

        return $contacts;
    }

    public function getBusiness()
    {
        $businessID = $this->getBusinessID();

        $businessInfo = DB::table('businesses')->where('id',$businessID)->get()->first();

        return $businessInfo;
    }

    public function getServiceInfo()
    {
        $businessID = $this->getBusinessID();

        $businessInfo = DB::table('services')->where('business',$businessID)->get();

        return $businessInfo;
    }

    public function getMyServices()
    {
        $businessID = $this->getBusinessID();

        $myServiceInfo = DB::select('SELECT id, name, category, price_hourly, price, description FROM services WHERE business='.$businessID.';');

        return $myServiceInfo;
    }

    public function removeMyService($id) {
        DB::table('images')->where('portfolio', $id)->delete();
        DB::table('reviews')->where('service_id', $id)->delete();
        foreach (DB::table('posts')->where('service_id', $id)->get() as $value) {
            $val = $value->id;
            DB::table('shares')->where('post_id', $val)->delete();
            DB::table('likes')->where('post_id', $val)->delete();
            DB::table('comments')->where('post_id', $val)->delete();
            DB::table('posts')->where('id', $val)->delete();
        }
        DB::table('favorites')->where('service_id', $id)->delete();
        DB::table('bookings')->where('service_id', $id)->delete();
        return DB::table('services')->where('id', $id)->delete();
    }

    public function getBusinessID()
    {
        $businessId = DB::table('businesses')->where('client', session()->get('id'))->value('id');

        return $businessId;
    }

    public function addContact($name, $phone, $email, $address, $businessID, $image)
    {
        return DB::table('contacts')->insert(
            array("name" => $name, "address" => $address, "phone_number" => $phone, "email" => $email, "business" => $businessID, "image" => $image)
        );
    }

    public function changeContact($contactID, $name, $phone, $email, $address, $image)
    {
        //dd($image);
        if(!$image){
            return DB::table('contacts')->where('id', $contactID)->update(
                array("name" => $name, "address" => $address, "phone_number" => $phone, "email" => $email)
            );
        } else{
            $imagePath = DB::select('SELECT image FROM contacts WHERE id =' . $contactID . ';')[0]->image;
            if($imagePath != null){
                unlink($imagePath);
            }
            //dd($image);
            return DB::table('contacts')->where('id', $contactID)->update(
                array("name" => $name, "address" => $address, "phone_number" => $phone, "email" => $email, "image" => $image)
            );
        }
    }

    public function deleteContact($contactID)
    {
        $imagePath = DB::select('SELECT image FROM contacts WHERE id=' . $contactID . ';')[0]->image;
        if ($imagePath != null)

            unlink($imagePath);
        return DB::table('contacts')->where('id', $contactID)->delete();
    }

    public function addPost($title, $service, $text, $url, $image, $time)
    {
        if (!empty($url)) {
            preg_match('/(?:youtube\.com\/(?:[^\/]+\/.+\/|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\/)([^"&?\/ ]{11})/i',
                $url, $newUrl, PREG_OFFSET_CAPTURE);

            $url = $newUrl[1][0];
        }


        return DB::table('posts')->insert(
            array("service_id" => $service, "title" => $title, "text" => $text, "url" => $url, "image" => $image, "date_time" => $time)
        );
    }

    public function getPost()
    {
        $businessId = DB::table('businesses')->where('client', session()->get('id'))->get()->first()->id;

        return DB::select('SELECT services.id AS services_id, services.name, services.category,
                                  posts.title, posts.id AS posts_id, posts.text, posts.url, posts.image, posts.date_time 
                                  FROM posts 
        INNER JOIN services ON posts.service_id = services.id WHERE services.business = ' . $businessId . ';');
    }

    public function removePost($id)
    {

        $imagePath = DB::select('SELECT image FROM posts WHERE id=' . $id . ';')[0]->image;
        if ($imagePath != null ) {
            try {
                unlink($imagePath);
            }
            catch(Exception $e) {

            }
        }

        DB::table('likes')->where('post_id', $id)->delete();
        DB::table('comments')->where('post_id', $id)->delete();
        return DB::table('posts')->where('id', $id)->delete();
    }

    public function editPost($id, $title, $text, $select)
    {
        return DB::table('posts')->where('id', $id)->update(array("title" => $title,
            "text" => $text, "service_id" => $select));
    }

    public function getUserService()
    {
        $businessId = DB::table('businesses')->where('client', session()->get('id'))->first()->id;
        $data = DB::table('services')->where('business', $businessId)->get();

        return $data;
    }

    public function getAllReviews($id)
    {
        return DB::select('SELECT services.id AS service_id, reviews.id AS review_id, 
        reviews.reviewer_id AS reviewer_id, reviews.stars, reviews.text, reviews.date_time,
        services.name AS services_name, services.category, services.price_hourly, services.price, services.description, 
        clients.mobile, clients.email, clients.first_name, clients.image FROM reviews 
        INNER JOIN services ON reviews.service_id = services.id 
        INNER JOIN clients ON clients.id = reviews.reviewer_id
        INNER JOIN businesses ON services.business = businesses.id WHERE businesses.id = ' . $id . ';');
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

    public function addPortfolio($name, $link, $portfolio){
        return DB::table('images')->insert(
            array("name"=>$name, "url"=>$link, "portfolio"=>$portfolio)
        );
    }

    public function deletePortfolio($id){
        return DB::table('images')->where('id', $id)->delete();
    }

    public function getAllImages($businessId){
        $data = DB::select('SELECT services.id AS services_id, services.name, services.category,
                                  images.name, images.id AS image_id, images.url FROM images 
        INNER JOIN services ON images.portfolio = services.id WHERE services.business = ' . $businessId . ';');
        return $data;
    }

    public function getService($id) {
        return DB::table('services')->where('id', $id)->first();
    }

    public function getMyService($id) {
        $data =  DB::table('services')->where('id', $id)->first();
        return $data;
    }

    public function getBookings($id) {
        return DB::table('bookings')->where('service_id', $id)->get();
    }

    public function getBookingsFeed($businessid, $start, $end) {
        $services = DB::table('services')->where('business', $businessid)->get();
        $matchServices = array();
        foreach ($services as $s) {
            $singleMatch = array('service_id', '' . $s->id);
            array_push($matchServices, $singleMatch);
        }

        $bookings = DB::table('bookings')
        // Join user data
        ->select('bookings.*', 'services.name AS service_name','clients.first_name', 'clients.last_name', 'clients.email', 'clients.mobile', 'clients.image')
        ->join('clients', 'bookings.user_id', '=', 'clients.id')
        ->join('services', 'services.id', '=', 'bookings.service_id')
        ->whereBetween('date', [$start . '000', $end . '000'])
        ->Where($matchServices[0][0], $matchServices[0][1]);

        for ($i = 1; $i < sizeof($matchServices); $i++) {
            $bookings = $bookings->orWhere($matchServices[$i][0], $matchServices[$i][1]);
        }
        
        return $bookings->get();
    }

    public function changeBookingConfirmation($bookingid, $confirm, $chargeId) {
        DB::table('bookings')
        ->where('id', $bookingid)
        ->update(['confirmed' => $confirm, 'chargeId' => $chargeId]);
    }

    public function deleteBooking($bookingid) {
        DB::table('bookings')
        ->where('id', $bookingid)
        ->delete();
    }

    public function getBooking($bookingid) {
        return DB::table('bookings')->where('id', $bookingid)->first();
    }

    public function getEmail() {
        return DB::table('clients')->where('id', session()->get('id'))->value('email');
    }

    public function updateStripe($token) {
        return DB::table('businesses')->
        where('id', session()->get('businessid'))->
        update(array(
                "token" => $token
            )
        );
    }

    public function getToken($id) {
        return DB::table('businesses')->where('id', $id)->value('token');
    }

    public function getBusinessFromService($id) {
        return DB::table('services')->where('id', $id)->value('business');
    }

    public function getBusinessName($id) {
        return DB::table('businesses')->where('id', $id)->value('name');
    }
}
