<div id="servicesTime" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header" >
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Business Hours</h4>
            </div>
            <div class="modal-body" style="background: #efefef;">
                <div id="timeError" class="formIssue"></div>
                <div class="container-fluid">
                    <form id="businessHoursForm">
                        <div class="row" style="padding-bottom: 8px;">
                            <div class="col-md-12" style="background: #fff;padding: 10px;">
                                <div class="col-md-6" style="text-align: left;">
                                    <input name="sunday" type="checkbox" title="Sunday"/>
                                    <span>Sunday</span>
                                </div>
                                <div class="col-md-6" style="text-align: right;">
                                    <div>
                                        <label style="display:inline;">
                                            <select id="sundayStartTime">
                                                <option value="12:00am">12:00am</option>
                                                <option value="12:30am">12:30am</option>
                                                <option value="1:00am">1:00am</option>
                                                <option value="1:30am">1:30am</option>
                                                <option value="2:00am">2:00am</option>
                                                <option value="2:30am">2:30am</option>
                                                <option value="3:00am">3:00am</option>
                                                <option value="3:30am">3:30am</option>
                                                <option value="4:00am">4:00am</option>
                                                <option value="4:30am">4:30am</option>
                                                <option value="5:00am">5:00am</option>
                                                <option value="5:30am">5:30am</option>
                                                <option value="6:00am">6:00am</option>
                                                <option value="6:30am">6:30am</option>
                                                <option value="7:00am">7:00am</option>
                                                <option value="7:30am">7:30am</option>
                                                <option value="8:00am">8:00am</option>
                                                <option value="8:30am">8:30am</option>
                                                <option value="9:00am">9:00am</option>
                                                <option value="9:30am">9:30am</option>
                                                <option value="10:00am">10:00am</option>
                                                <option value="10:30am">10:30am</option>
                                                <option value="11:00am">11:00am</option>
                                                <option value="11:30am">11:30am</option>
                                                <option value="12:00pm">12:00pm</option>
                                                <option value="12:30pm">12:30pm</option>
                                                <option value="1:00pm">1:00pm</option>
                                                <option value="1:30pm">1:30pm</option>
                                                <option value="2:00pm">2:00pm</option>
                                                <option value="2:30pm">2:30pm</option>
                                                <option value="3:00pm">3:00pm</option>
                                                <option value="3:30pm">3:30pm</option>
                                                <option value="4:00pm">4:00pm</option>
                                                <option value="4:30pm">4:30pm</option>
                                                <option value="5:00pm">5:00pm</option>
                                                <option value="5:30pm">5:30pm</option>
                                                <option value="6:00pm">6:00pm</option>
                                                <option value="6:30pm">6:30pm</option>
                                                <option value="7:00pm">7:00pm</option>
                                                <option value="7:30pm">7:30pm</option>
                                                <option value="8:00pm">8:00pm</option>
                                                <option value="8:30pm">8:30pm</option>
                                                <option value="9:00pm">9:00pm</option>
                                                <option value="9:30pm">9:30pm</option>
                                                <option value="10:00pm">10:00pm</option>
                                                <option value="10:30pm">10:30pm</option>
                                                <option value="11:00pm">11:00pm</option>
                                                <option value="11:30pm">11:30pm</option>
                                            </select> to </label>
                                        <label style="display:inline;">
                                            <select id="sundayEndTime">
                                                <option value="12:00am">12:00am</option>
                                                <option value="12:30am">12:30am</option>
                                                <option value="1:00am">1:00am</option>
                                                <option value="1:30am">1:30am</option>
                                                <option value="2:00am">2:00am</option>
                                                <option value="2:30am">2:30am</option>
                                                <option value="3:00am">3:00am</option>
                                                <option value="3:30am">3:30am</option>
                                                <option value="4:00am">4:00am</option>
                                                <option value="4:30am">4:30am</option>
                                                <option value="5:00am">5:00am</option>
                                                <option value="5:30am">5:30am</option>
                                                <option value="6:00am">6:00am</option>
                                                <option value="6:30am">6:30am</option>
                                                <option value="7:00am">7:00am</option>
                                                <option value="7:30am">7:30am</option>
                                                <option value="8:00am">8:00am</option>
                                                <option value="8:30am">8:30am</option>
                                                <option value="9:00am">9:00am</option>
                                                <option value="9:30am">9:30am</option>
                                                <option value="10:00am">10:00am</option>
                                                <option value="10:30am">10:30am</option>
                                                <option value="11:00am">11:00am</option>
                                                <option value="11:30am">11:30am</option>
                                                <option value="12:00pm">12:00pm</option>
                                                <option value="12:30pm">12:30pm</option>
                                                <option value="1:00pm">1:00pm</option>
                                                <option value="1:30pm">1:30pm</option>
                                                <option value="2:00pm">2:00pm</option>
                                                <option value="2:30pm">2:30pm</option>
                                                <option value="3:00pm">3:00pm</option>
                                                <option value="3:30pm">3:30pm</option>
                                                <option value="4:00pm">4:00pm</option>
                                                <option value="4:30pm">4:30pm</option>
                                                <option value="5:00pm">5:00pm</option>
                                                <option value="5:30pm">5:30pm</option>
                                                <option value="6:00pm">6:00pm</option>
                                                <option value="6:30pm">6:30pm</option>
                                                <option value="7:00pm">7:00pm</option>
                                                <option value="7:30pm">7:30pm</option>
                                                <option value="8:00pm">8:00pm</option>
                                                <option value="8:30pm">8:30pm</option>
                                                <option value="9:00pm">9:00pm</option>
                                                <option value="9:30pm">9:30pm</option>
                                                <option value="10:00pm">10:00pm</option>
                                                <option value="10:30pm">10:30pm</option>
                                                <option value="11:00pm">11:00pm</option>
                                                <option value="11:30pm">11:30pm</option>
                                            </select></label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row" style="padding-bottom: 8px;">
                            <div class="col-md-12" style="background: #fff;padding: 10px;">
                                <div class="col-md-6" style="text-align: left;">
                                    <input name="monday" type="checkbox" title="Monday"/>
                                    <span>Monday</span>
                                </div>
                                <div class="col-md-6" style="text-align: right;">
                                    <div>
                                        <label style="display:inline;">
                                            <select id="mondayStartTime">
                                                <option value="12:00am">12:00am</option>
                                                <option value="12:30am">12:30am</option>
                                                <option value="1:00am">1:00am</option>
                                                <option value="1:30am">1:30am</option>
                                                <option value="2:00am">2:00am</option>
                                                <option value="2:30am">2:30am</option>
                                                <option value="3:00am">3:00am</option>
                                                <option value="3:30am">3:30am</option>
                                                <option value="4:00am">4:00am</option>
                                                <option value="4:30am">4:30am</option>
                                                <option value="5:00am">5:00am</option>
                                                <option value="5:30am">5:30am</option>
                                                <option value="6:00am">6:00am</option>
                                                <option value="6:30am">6:30am</option>
                                                <option value="7:00am">7:00am</option>
                                                <option value="7:30am">7:30am</option>
                                                <option value="8:00am">8:00am</option>
                                                <option value="8:30am">8:30am</option>
                                                <option value="9:00am">9:00am</option>
                                                <option value="9:30am">9:30am</option>
                                                <option value="10:00am">10:00am</option>
                                                <option value="10:30am">10:30am</option>
                                                <option value="11:00am">11:00am</option>
                                                <option value="11:30am">11:30am</option>
                                                <option value="12:00pm">12:00pm</option>
                                                <option value="12:30pm">12:30pm</option>
                                                <option value="1:00pm">1:00pm</option>
                                                <option value="1:30pm">1:30pm</option>
                                                <option value="2:00pm">2:00pm</option>
                                                <option value="2:30pm">2:30pm</option>
                                                <option value="3:00pm">3:00pm</option>
                                                <option value="3:30pm">3:30pm</option>
                                                <option value="4:00pm">4:00pm</option>
                                                <option value="4:30pm">4:30pm</option>
                                                <option value="5:00pm">5:00pm</option>
                                                <option value="5:30pm">5:30pm</option>
                                                <option value="6:00pm">6:00pm</option>
                                                <option value="6:30pm">6:30pm</option>
                                                <option value="7:00pm">7:00pm</option>
                                                <option value="7:30pm">7:30pm</option>
                                                <option value="8:00pm">8:00pm</option>
                                                <option value="8:30pm">8:30pm</option>
                                                <option value="9:00pm">9:00pm</option>
                                                <option value="9:30pm">9:30pm</option>
                                                <option value="10:00pm">10:00pm</option>
                                                <option value="10:30pm">10:30pm</option>
                                                <option value="11:00pm">11:00pm</option>
                                                <option value="11:30pm">11:30pm</option>
                                            </select> to </label>
                                        <label style="display:inline;">
                                            <select id="mondayEndTime">
                                                <option value="12:00am">12:00am</option>
                                                <option value="12:30am">12:30am</option>
                                                <option value="1:00am">1:00am</option>
                                                <option value="1:30am">1:30am</option>
                                                <option value="2:00am">2:00am</option>
                                                <option value="2:30am">2:30am</option>
                                                <option value="3:00am">3:00am</option>
                                                <option value="3:30am">3:30am</option>
                                                <option value="4:00am">4:00am</option>
                                                <option value="4:30am">4:30am</option>
                                                <option value="5:00am">5:00am</option>
                                                <option value="5:30am">5:30am</option>
                                                <option value="6:00am">6:00am</option>
                                                <option value="6:30am">6:30am</option>
                                                <option value="7:00am">7:00am</option>
                                                <option value="7:30am">7:30am</option>
                                                <option value="8:00am">8:00am</option>
                                                <option value="8:30am">8:30am</option>
                                                <option value="9:00am">9:00am</option>
                                                <option value="9:30am">9:30am</option>
                                                <option value="10:00am">10:00am</option>
                                                <option value="10:30am">10:30am</option>
                                                <option value="11:00am">11:00am</option>
                                                <option value="11:30am">11:30am</option>
                                                <option value="12:00pm">12:00pm</option>
                                                <option value="12:30pm">12:30pm</option>
                                                <option value="1:00pm">1:00pm</option>
                                                <option value="1:30pm">1:30pm</option>
                                                <option value="2:00pm">2:00pm</option>
                                                <option value="2:30pm">2:30pm</option>
                                                <option value="3:00pm">3:00pm</option>
                                                <option value="3:30pm">3:30pm</option>
                                                <option value="4:00pm">4:00pm</option>
                                                <option value="4:30pm">4:30pm</option>
                                                <option value="5:00pm">5:00pm</option>
                                                <option value="5:30pm">5:30pm</option>
                                                <option value="6:00pm">6:00pm</option>
                                                <option value="6:30pm">6:30pm</option>
                                                <option value="7:00pm">7:00pm</option>
                                                <option value="7:30pm">7:30pm</option>
                                                <option value="8:00pm">8:00pm</option>
                                                <option value="8:30pm">8:30pm</option>
                                                <option value="9:00pm">9:00pm</option>
                                                <option value="9:30pm">9:30pm</option>
                                                <option value="10:00pm">10:00pm</option>
                                                <option value="10:30pm">10:30pm</option>
                                                <option value="11:00pm">11:00pm</option>
                                                <option value="11:30pm">11:30pm</option>
                                            </select></label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row" style="padding-bottom: 8px;">
                            <div class="col-md-12" style="background: #fff;padding: 10px;">
                                <div class="col-md-6" style="text-align: left;">
                                    <input name="tuesday" type="checkbox"  title="Tuesday"/>
                                    <span>Tuesday</span>
                                </div>
                                <div class="col-md-6" style="text-align: right;">
                                    <div>
                                        <label style="display:inline;">
                                            <select id="tuesdayStartTime">
                                                <option value="12:00am">12:00am</option>
                                                <option value="12:30am">12:30am</option>
                                                <option value="1:00am">1:00am</option>
                                                <option value="1:30am">1:30am</option>
                                                <option value="2:00am">2:00am</option>
                                                <option value="2:30am">2:30am</option>
                                                <option value="3:00am">3:00am</option>
                                                <option value="3:30am">3:30am</option>
                                                <option value="4:00am">4:00am</option>
                                                <option value="4:30am">4:30am</option>
                                                <option value="5:00am">5:00am</option>
                                                <option value="5:30am">5:30am</option>
                                                <option value="6:00am">6:00am</option>
                                                <option value="6:30am">6:30am</option>
                                                <option value="7:00am">7:00am</option>
                                                <option value="7:30am">7:30am</option>
                                                <option value="8:00am">8:00am</option>
                                                <option value="8:30am">8:30am</option>
                                                <option value="9:00am">9:00am</option>
                                                <option value="9:30am">9:30am</option>
                                                <option value="10:00am">10:00am</option>
                                                <option value="10:30am">10:30am</option>
                                                <option value="11:00am">11:00am</option>
                                                <option value="11:30am">11:30am</option>
                                                <option value="12:00pm">12:00pm</option>
                                                <option value="12:30pm">12:30pm</option>
                                                <option value="1:00pm">1:00pm</option>
                                                <option value="1:30pm">1:30pm</option>
                                                <option value="2:00pm">2:00pm</option>
                                                <option value="2:30pm">2:30pm</option>
                                                <option value="3:00pm">3:00pm</option>
                                                <option value="3:30pm">3:30pm</option>
                                                <option value="4:00pm">4:00pm</option>
                                                <option value="4:30pm">4:30pm</option>
                                                <option value="5:00pm">5:00pm</option>
                                                <option value="5:30pm">5:30pm</option>
                                                <option value="6:00pm">6:00pm</option>
                                                <option value="6:30pm">6:30pm</option>
                                                <option value="7:00pm">7:00pm</option>
                                                <option value="7:30pm">7:30pm</option>
                                                <option value="8:00pm">8:00pm</option>
                                                <option value="8:30pm">8:30pm</option>
                                                <option value="9:00pm">9:00pm</option>
                                                <option value="9:30pm">9:30pm</option>
                                                <option value="10:00pm">10:00pm</option>
                                                <option value="10:30pm">10:30pm</option>
                                                <option value="11:00pm">11:00pm</option>
                                                <option value="11:30pm">11:30pm</option>
                                            </select> to </label>
                                        <label style="display:inline;">
                                            <select id="tuesdayEndTime">
                                                <option value="12:00am">12:00am</option>
                                                <option value="12:30am">12:30am</option>
                                                <option value="1:00am">1:00am</option>
                                                <option value="1:30am">1:30am</option>
                                                <option value="2:00am">2:00am</option>
                                                <option value="2:30am">2:30am</option>
                                                <option value="3:00am">3:00am</option>
                                                <option value="3:30am">3:30am</option>
                                                <option value="4:00am">4:00am</option>
                                                <option value="4:30am">4:30am</option>
                                                <option value="5:00am">5:00am</option>
                                                <option value="5:30am">5:30am</option>
                                                <option value="6:00am">6:00am</option>
                                                <option value="6:30am">6:30am</option>
                                                <option value="7:00am">7:00am</option>
                                                <option value="7:30am">7:30am</option>
                                                <option value="8:00am">8:00am</option>
                                                <option value="8:30am">8:30am</option>
                                                <option value="9:00am">9:00am</option>
                                                <option value="9:30am">9:30am</option>
                                                <option value="10:00am">10:00am</option>
                                                <option value="10:30am">10:30am</option>
                                                <option value="11:00am">11:00am</option>
                                                <option value="11:30am">11:30am</option>
                                                <option value="12:00pm">12:00pm</option>
                                                <option value="12:30pm">12:30pm</option>
                                                <option value="1:00pm">1:00pm</option>
                                                <option value="1:30pm">1:30pm</option>
                                                <option value="2:00pm">2:00pm</option>
                                                <option value="2:30pm">2:30pm</option>
                                                <option value="3:00pm">3:00pm</option>
                                                <option value="3:30pm">3:30pm</option>
                                                <option value="4:00pm">4:00pm</option>
                                                <option value="4:30pm">4:30pm</option>
                                                <option value="5:00pm">5:00pm</option>
                                                <option value="5:30pm">5:30pm</option>
                                                <option value="6:00pm">6:00pm</option>
                                                <option value="6:30pm">6:30pm</option>
                                                <option value="7:00pm">7:00pm</option>
                                                <option value="7:30pm">7:30pm</option>
                                                <option value="8:00pm">8:00pm</option>
                                                <option value="8:30pm">8:30pm</option>
                                                <option value="9:00pm">9:00pm</option>
                                                <option value="9:30pm">9:30pm</option>
                                                <option value="10:00pm">10:00pm</option>
                                                <option value="10:30pm">10:30pm</option>
                                                <option value="11:00pm">11:00pm</option>
                                                <option value="11:30pm">11:30pm</option>
                                            </select></label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row" style="padding-bottom: 8px;">
                            <div class="col-md-12" style="background: #fff;padding: 10px;">
                                <div class="col-md-6" style="text-align: left;">
                                    <input name="wednesday" type="checkbox" title="Wednesday"/>
                                    <span>Wednesday</span>
                                </div>
                                <div class="col-md-6" style="text-align: right;">
                                    <div>
                                        <label style="display:inline;">
                                            <select id="wednesdayStartTime">
                                                <option value="12:00am">12:00am</option>
                                                <option value="12:30am">12:30am</option>
                                                <option value="1:00am">1:00am</option>
                                                <option value="1:30am">1:30am</option>
                                                <option value="2:00am">2:00am</option>
                                                <option value="2:30am">2:30am</option>
                                                <option value="3:00am">3:00am</option>
                                                <option value="3:30am">3:30am</option>
                                                <option value="4:00am">4:00am</option>
                                                <option value="4:30am">4:30am</option>
                                                <option value="5:00am">5:00am</option>
                                                <option value="5:30am">5:30am</option>
                                                <option value="6:00am">6:00am</option>
                                                <option value="6:30am">6:30am</option>
                                                <option value="7:00am">7:00am</option>
                                                <option value="7:30am">7:30am</option>
                                                <option value="8:00am">8:00am</option>
                                                <option value="8:30am">8:30am</option>
                                                <option value="9:00am">9:00am</option>
                                                <option value="9:30am">9:30am</option>
                                                <option value="10:00am">10:00am</option>
                                                <option value="10:30am">10:30am</option>
                                                <option value="11:00am">11:00am</option>
                                                <option value="11:30am">11:30am</option>
                                                <option value="12:00pm">12:00pm</option>
                                                <option value="12:30pm">12:30pm</option>
                                                <option value="1:00pm">1:00pm</option>
                                                <option value="1:30pm">1:30pm</option>
                                                <option value="2:00pm">2:00pm</option>
                                                <option value="2:30pm">2:30pm</option>
                                                <option value="3:00pm">3:00pm</option>
                                                <option value="3:30pm">3:30pm</option>
                                                <option value="4:00pm">4:00pm</option>
                                                <option value="4:30pm">4:30pm</option>
                                                <option value="5:00pm">5:00pm</option>
                                                <option value="5:30pm">5:30pm</option>
                                                <option value="6:00pm">6:00pm</option>
                                                <option value="6:30pm">6:30pm</option>
                                                <option value="7:00pm">7:00pm</option>
                                                <option value="7:30pm">7:30pm</option>
                                                <option value="8:00pm">8:00pm</option>
                                                <option value="8:30pm">8:30pm</option>
                                                <option value="9:00pm">9:00pm</option>
                                                <option value="9:30pm">9:30pm</option>
                                                <option value="10:00pm">10:00pm</option>
                                                <option value="10:30pm">10:30pm</option>
                                                <option value="11:00pm">11:00pm</option>
                                                <option value="11:30pm">11:30pm</option>
                                            </select> to </label>
                                        <label style="display:inline;">
                                            <select id="wednesdayEndTime">
                                                <option value="12:00am">12:00am</option>
                                                <option value="12:30am">12:30am</option>
                                                <option value="1:00am">1:00am</option>
                                                <option value="1:30am">1:30am</option>
                                                <option value="2:00am">2:00am</option>
                                                <option value="2:30am">2:30am</option>
                                                <option value="3:00am">3:00am</option>
                                                <option value="3:30am">3:30am</option>
                                                <option value="4:00am">4:00am</option>
                                                <option value="4:30am">4:30am</option>
                                                <option value="5:00am">5:00am</option>
                                                <option value="5:30am">5:30am</option>
                                                <option value="6:00am">6:00am</option>
                                                <option value="6:30am">6:30am</option>
                                                <option value="7:00am">7:00am</option>
                                                <option value="7:30am">7:30am</option>
                                                <option value="8:00am">8:00am</option>
                                                <option value="8:30am">8:30am</option>
                                                <option value="9:00am">9:00am</option>
                                                <option value="9:30am">9:30am</option>
                                                <option value="10:00am">10:00am</option>
                                                <option value="10:30am">10:30am</option>
                                                <option value="11:00am">11:00am</option>
                                                <option value="11:30am">11:30am</option>
                                                <option value="12:00pm">12:00pm</option>
                                                <option value="12:30pm">12:30pm</option>
                                                <option value="1:00pm">1:00pm</option>
                                                <option value="1:30pm">1:30pm</option>
                                                <option value="2:00pm">2:00pm</option>
                                                <option value="2:30pm">2:30pm</option>
                                                <option value="3:00pm">3:00pm</option>
                                                <option value="3:30pm">3:30pm</option>
                                                <option value="4:00pm">4:00pm</option>
                                                <option value="4:30pm">4:30pm</option>
                                                <option value="5:00pm">5:00pm</option>
                                                <option value="5:30pm">5:30pm</option>
                                                <option value="6:00pm">6:00pm</option>
                                                <option value="6:30pm">6:30pm</option>
                                                <option value="7:00pm">7:00pm</option>
                                                <option value="7:30pm">7:30pm</option>
                                                <option value="8:00pm">8:00pm</option>
                                                <option value="8:30pm">8:30pm</option>
                                                <option value="9:00pm">9:00pm</option>
                                                <option value="9:30pm">9:30pm</option>
                                                <option value="10:00pm">10:00pm</option>
                                                <option value="10:30pm">10:30pm</option>
                                                <option value="11:00pm">11:00pm</option>
                                                <option value="11:30pm">11:30pm</option>
                                            </select></label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row" style="padding-bottom: 8px;">
                            <div class="col-md-12" style="background: #fff;padding: 10px;">
                                <div class="col-md-6" style="text-align: left;">
                                    <input name="thursday" type="checkbox" title="Thursday"/>
                                    <span>Thursday</span>
                                </div>
                                <div class="col-md-6" style="text-align: right;">
                                    <div>
                                        <label style="display:inline;">
                                            <select id="thursdayStartTime">
                                                <option value="12:00am">12:00am</option>
                                                <option value="12:30am">12:30am</option>
                                                <option value="1:00am">1:00am</option>
                                                <option value="1:30am">1:30am</option>
                                                <option value="2:00am">2:00am</option>
                                                <option value="2:30am">2:30am</option>
                                                <option value="3:00am">3:00am</option>
                                                <option value="3:30am">3:30am</option>
                                                <option value="4:00am">4:00am</option>
                                                <option value="4:30am">4:30am</option>
                                                <option value="5:00am">5:00am</option>
                                                <option value="5:30am">5:30am</option>
                                                <option value="6:00am">6:00am</option>
                                                <option value="6:30am">6:30am</option>
                                                <option value="7:00am">7:00am</option>
                                                <option value="7:30am">7:30am</option>
                                                <option value="8:00am">8:00am</option>
                                                <option value="8:30am">8:30am</option>
                                                <option value="9:00am">9:00am</option>
                                                <option value="9:30am">9:30am</option>
                                                <option value="10:00am">10:00am</option>
                                                <option value="10:30am">10:30am</option>
                                                <option value="11:00am">11:00am</option>
                                                <option value="11:30am">11:30am</option>
                                                <option value="12:00pm">12:00pm</option>
                                                <option value="12:30pm">12:30pm</option>
                                                <option value="1:00pm">1:00pm</option>
                                                <option value="1:30pm">1:30pm</option>
                                                <option value="2:00pm">2:00pm</option>
                                                <option value="2:30pm">2:30pm</option>
                                                <option value="3:00pm">3:00pm</option>
                                                <option value="3:30pm">3:30pm</option>
                                                <option value="4:00pm">4:00pm</option>
                                                <option value="4:30pm">4:30pm</option>
                                                <option value="5:00pm">5:00pm</option>
                                                <option value="5:30pm">5:30pm</option>
                                                <option value="6:00pm">6:00pm</option>
                                                <option value="6:30pm">6:30pm</option>
                                                <option value="7:00pm">7:00pm</option>
                                                <option value="7:30pm">7:30pm</option>
                                                <option value="8:00pm">8:00pm</option>
                                                <option value="8:30pm">8:30pm</option>
                                                <option value="9:00pm">9:00pm</option>
                                                <option value="9:30pm">9:30pm</option>
                                                <option value="10:00pm">10:00pm</option>
                                                <option value="10:30pm">10:30pm</option>
                                                <option value="11:00pm">11:00pm</option>
                                                <option value="11:30pm">11:30pm</option>
                                            </select> to </label>
                                        <label style="display:inline;">
                                            <select id="thursdayEndTime">
                                                <option value="12:00am">12:00am</option>
                                                <option value="12:30am">12:30am</option>
                                                <option value="1:00am">1:00am</option>
                                                <option value="1:30am">1:30am</option>
                                                <option value="2:00am">2:00am</option>
                                                <option value="2:30am">2:30am</option>
                                                <option value="3:00am">3:00am</option>
                                                <option value="3:30am">3:30am</option>
                                                <option value="4:00am">4:00am</option>
                                                <option value="4:30am">4:30am</option>
                                                <option value="5:00am">5:00am</option>
                                                <option value="5:30am">5:30am</option>
                                                <option value="6:00am">6:00am</option>
                                                <option value="6:30am">6:30am</option>
                                                <option value="7:00am">7:00am</option>
                                                <option value="7:30am">7:30am</option>
                                                <option value="8:00am">8:00am</option>
                                                <option value="8:30am">8:30am</option>
                                                <option value="9:00am">9:00am</option>
                                                <option value="9:30am">9:30am</option>
                                                <option value="10:00am">10:00am</option>
                                                <option value="10:30am">10:30am</option>
                                                <option value="11:00am">11:00am</option>
                                                <option value="11:30am">11:30am</option>
                                                <option value="12:00pm">12:00pm</option>
                                                <option value="12:30pm">12:30pm</option>
                                                <option value="1:00pm">1:00pm</option>
                                                <option value="1:30pm">1:30pm</option>
                                                <option value="2:00pm">2:00pm</option>
                                                <option value="2:30pm">2:30pm</option>
                                                <option value="3:00pm">3:00pm</option>
                                                <option value="3:30pm">3:30pm</option>
                                                <option value="4:00pm">4:00pm</option>
                                                <option value="4:30pm">4:30pm</option>
                                                <option value="5:00pm">5:00pm</option>
                                                <option value="5:30pm">5:30pm</option>
                                                <option value="6:00pm">6:00pm</option>
                                                <option value="6:30pm">6:30pm</option>
                                                <option value="7:00pm">7:00pm</option>
                                                <option value="7:30pm">7:30pm</option>
                                                <option value="8:00pm">8:00pm</option>
                                                <option value="8:30pm">8:30pm</option>
                                                <option value="9:00pm">9:00pm</option>
                                                <option value="9:30pm">9:30pm</option>
                                                <option value="10:00pm">10:00pm</option>
                                                <option value="10:30pm">10:30pm</option>
                                                <option value="11:00pm">11:00pm</option>
                                                <option value="11:30pm">11:30pm</option>
                                            </select></label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row" style="padding-bottom: 8px;">
                            <div class="col-md-12" style="background: #fff;padding: 10px;">
                                <div class="col-md-6" style="text-align: left;">
                                    <input name="friday" type="checkbox" title="Friday"/>
                                    <span>Friday</span>
                                </div>
                                <div class="col-md-6" style="text-align: right;">
                                    <div>
                                        <label style="display:inline;">
                                            <select id="fridayStartTime">
                                                <option value="12:00am">12:00am</option>
                                                <option value="12:30am">12:30am</option>
                                                <option value="1:00am">1:00am</option>
                                                <option value="1:30am">1:30am</option>
                                                <option value="2:00am">2:00am</option>
                                                <option value="2:30am">2:30am</option>
                                                <option value="3:00am">3:00am</option>
                                                <option value="3:30am">3:30am</option>
                                                <option value="4:00am">4:00am</option>
                                                <option value="4:30am">4:30am</option>
                                                <option value="5:00am">5:00am</option>
                                                <option value="5:30am">5:30am</option>
                                                <option value="6:00am">6:00am</option>
                                                <option value="6:30am">6:30am</option>
                                                <option value="7:00am">7:00am</option>
                                                <option value="7:30am">7:30am</option>
                                                <option value="8:00am">8:00am</option>
                                                <option value="8:30am">8:30am</option>
                                                <option value="9:00am">9:00am</option>
                                                <option value="9:30am">9:30am</option>
                                                <option value="10:00am">10:00am</option>
                                                <option value="10:30am">10:30am</option>
                                                <option value="11:00am">11:00am</option>
                                                <option value="11:30am">11:30am</option>
                                                <option value="12:00pm">12:00pm</option>
                                                <option value="12:30pm">12:30pm</option>
                                                <option value="1:00pm">1:00pm</option>
                                                <option value="1:30pm">1:30pm</option>
                                                <option value="2:00pm">2:00pm</option>
                                                <option value="2:30pm">2:30pm</option>
                                                <option value="3:00pm">3:00pm</option>
                                                <option value="3:30pm">3:30pm</option>
                                                <option value="4:00pm">4:00pm</option>
                                                <option value="4:30pm">4:30pm</option>
                                                <option value="5:00pm">5:00pm</option>
                                                <option value="5:30pm">5:30pm</option>
                                                <option value="6:00pm">6:00pm</option>
                                                <option value="6:30pm">6:30pm</option>
                                                <option value="7:00pm">7:00pm</option>
                                                <option value="7:30pm">7:30pm</option>
                                                <option value="8:00pm">8:00pm</option>
                                                <option value="8:30pm">8:30pm</option>
                                                <option value="9:00pm">9:00pm</option>
                                                <option value="9:30pm">9:30pm</option>
                                                <option value="10:00pm">10:00pm</option>
                                                <option value="10:30pm">10:30pm</option>
                                                <option value="11:00pm">11:00pm</option>
                                                <option value="11:30pm">11:30pm</option>
                                            </select> to </label>
                                        <label style="display:inline;">
                                            <select id="fridayEndTime">
                                                <option value="12:00am">12:00am</option>
                                                <option value="12:30am">12:30am</option>
                                                <option value="1:00am">1:00am</option>
                                                <option value="1:30am">1:30am</option>
                                                <option value="2:00am">2:00am</option>
                                                <option value="2:30am">2:30am</option>
                                                <option value="3:00am">3:00am</option>
                                                <option value="3:30am">3:30am</option>
                                                <option value="4:00am">4:00am</option>
                                                <option value="4:30am">4:30am</option>
                                                <option value="5:00am">5:00am</option>
                                                <option value="5:30am">5:30am</option>
                                                <option value="6:00am">6:00am</option>
                                                <option value="6:30am">6:30am</option>
                                                <option value="7:00am">7:00am</option>
                                                <option value="7:30am">7:30am</option>
                                                <option value="8:00am">8:00am</option>
                                                <option value="8:30am">8:30am</option>
                                                <option value="9:00am">9:00am</option>
                                                <option value="9:30am">9:30am</option>
                                                <option value="10:00am">10:00am</option>
                                                <option value="10:30am">10:30am</option>
                                                <option value="11:00am">11:00am</option>
                                                <option value="11:30am">11:30am</option>
                                                <option value="12:00pm">12:00pm</option>
                                                <option value="12:30pm">12:30pm</option>
                                                <option value="1:00pm">1:00pm</option>
                                                <option value="1:30pm">1:30pm</option>
                                                <option value="2:00pm">2:00pm</option>
                                                <option value="2:30pm">2:30pm</option>
                                                <option value="3:00pm">3:00pm</option>
                                                <option value="3:30pm">3:30pm</option>
                                                <option value="4:00pm">4:00pm</option>
                                                <option value="4:30pm">4:30pm</option>
                                                <option value="5:00pm">5:00pm</option>
                                                <option value="5:30pm">5:30pm</option>
                                                <option value="6:00pm">6:00pm</option>
                                                <option value="6:30pm">6:30pm</option>
                                                <option value="7:00pm">7:00pm</option>
                                                <option value="7:30pm">7:30pm</option>
                                                <option value="8:00pm">8:00pm</option>
                                                <option value="8:30pm">8:30pm</option>
                                                <option value="9:00pm">9:00pm</option>
                                                <option value="9:30pm">9:30pm</option>
                                                <option value="10:00pm">10:00pm</option>
                                                <option value="10:30pm">10:30pm</option>
                                                <option value="11:00pm">11:00pm</option>
                                                <option value="11:30pm">11:30pm</option>
                                            </select></label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row" style="padding-bottom: 8px;">
                            <div class="col-md-12" style="background: #fff;padding: 10px;">
                                <div class="col-md-6" style="text-align: left;">
                                    <input name="saturday" type="checkbox" title="Saturday"/>
                                    <span>Saturday</span>
                                </div>
                                <div class="col-md-6" style="text-align: right;">
                                    <div>
                                        <label style="display:inline;">
                                            <select id="saturdayStartTime">
                                                <option value="12:00am">12:00am</option>
                                                <option value="12:30am">12:30am</option>
                                                <option value="1:00am">1:00am</option>
                                                <option value="1:30am">1:30am</option>
                                                <option value="2:00am">2:00am</option>
                                                <option value="2:30am">2:30am</option>
                                                <option value="3:00am">3:00am</option>
                                                <option value="3:30am">3:30am</option>
                                                <option value="4:00am">4:00am</option>
                                                <option value="4:30am">4:30am</option>
                                                <option value="5:00am">5:00am</option>
                                                <option value="5:30am">5:30am</option>
                                                <option value="6:00am">6:00am</option>
                                                <option value="6:30am">6:30am</option>
                                                <option value="7:00am">7:00am</option>
                                                <option value="7:30am">7:30am</option>
                                                <option value="8:00am">8:00am</option>
                                                <option value="8:30am">8:30am</option>
                                                <option value="9:00am">9:00am</option>
                                                <option value="9:30am">9:30am</option>
                                                <option value="10:00am">10:00am</option>
                                                <option value="10:30am">10:30am</option>
                                                <option value="11:00am">11:00am</option>
                                                <option value="11:30am">11:30am</option>
                                                <option value="12:00pm">12:00pm</option>
                                                <option value="12:30pm">12:30pm</option>
                                                <option value="1:00pm">1:00pm</option>
                                                <option value="1:30pm">1:30pm</option>
                                                <option value="2:00pm">2:00pm</option>
                                                <option value="2:30pm">2:30pm</option>
                                                <option value="3:00pm">3:00pm</option>
                                                <option value="3:30pm">3:30pm</option>
                                                <option value="4:00pm">4:00pm</option>
                                                <option value="4:30pm">4:30pm</option>
                                                <option value="5:00pm">5:00pm</option>
                                                <option value="5:30pm">5:30pm</option>
                                                <option value="6:00pm">6:00pm</option>
                                                <option value="6:30pm">6:30pm</option>
                                                <option value="7:00pm">7:00pm</option>
                                                <option value="7:30pm">7:30pm</option>
                                                <option value="8:00pm">8:00pm</option>
                                                <option value="8:30pm">8:30pm</option>
                                                <option value="9:00pm">9:00pm</option>
                                                <option value="9:30pm">9:30pm</option>
                                                <option value="10:00pm">10:00pm</option>
                                                <option value="10:30pm">10:30pm</option>
                                                <option value="11:00pm">11:00pm</option>
                                                <option value="11:30pm">11:30pm</option>
                                            </select> to </label>
                                        <label style="display:inline;">
                                            <select id="saturdayEndTime">
                                                <option value="12:00am">12:00am</option>
                                                <option value="12:30am">12:30am</option>
                                                <option value="1:00am">1:00am</option>
                                                <option value="1:30am">1:30am</option>
                                                <option value="2:00am">2:00am</option>
                                                <option value="2:30am">2:30am</option>
                                                <option value="3:00am">3:00am</option>
                                                <option value="3:30am">3:30am</option>
                                                <option value="4:00am">4:00am</option>
                                                <option value="4:30am">4:30am</option>
                                                <option value="5:00am">5:00am</option>
                                                <option value="5:30am">5:30am</option>
                                                <option value="6:00am">6:00am</option>
                                                <option value="6:30am">6:30am</option>
                                                <option value="7:00am">7:00am</option>
                                                <option value="7:30am">7:30am</option>
                                                <option value="8:00am">8:00am</option>
                                                <option value="8:30am">8:30am</option>
                                                <option value="9:00am">9:00am</option>
                                                <option value="9:30am">9:30am</option>
                                                <option value="10:00am">10:00am</option>
                                                <option value="10:30am">10:30am</option>
                                                <option value="11:00am">11:00am</option>
                                                <option value="11:30am">11:30am</option>
                                                <option value="12:00pm">12:00pm</option>
                                                <option value="12:30pm">12:30pm</option>
                                                <option value="1:00pm">1:00pm</option>
                                                <option value="1:30pm">1:30pm</option>
                                                <option value="2:00pm">2:00pm</option>
                                                <option value="2:30pm">2:30pm</option>
                                                <option value="3:00pm">3:00pm</option>
                                                <option value="3:30pm">3:30pm</option>
                                                <option value="4:00pm">4:00pm</option>
                                                <option value="4:30pm">4:30pm</option>
                                                <option value="5:00pm">5:00pm</option>
                                                <option value="5:30pm">5:30pm</option>
                                                <option value="6:00pm">6:00pm</option>
                                                <option value="6:30pm">6:30pm</option>
                                                <option value="7:00pm">7:00pm</option>
                                                <option value="7:30pm">7:30pm</option>
                                                <option value="8:00pm">8:00pm</option>
                                                <option value="8:30pm">8:30pm</option>
                                                <option value="9:00pm">9:00pm</option>
                                                <option value="9:30pm">9:30pm</option>
                                                <option value="10:00pm">10:00pm</option>
                                                <option value="10:30pm">10:30pm</option>
                                                <option value="11:00pm">11:00pm</option>
                                                <option value="11:30pm">11:30pm</option>
                                            </select></label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <button id="businessHoursButton" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>