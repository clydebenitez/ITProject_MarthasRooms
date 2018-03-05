@extends('main')

@section('content')
<div class="container">
        <h2> Make A Reservation</h2>
        <hr>
                <div class="tabs">
                <ul class="tab-links">
                <li class="active"><a href="#date">Select Dates</a></li>
                <li><a href="#room">Select Room</a></li>
                <li><a href="#addons">Add-Ons</a></li>
                <li><a href="#details">Reservation Details</a></li>
                <li><a href="#confirmation">Confirmation</a></li>
                </ul>
                <div class="tab-content">
                <div id="date" class="tab active">
                <div class="rooms">
                    <h4><span>Room Details</span></h4>
                    
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="col-sm-6">
                          <label>Check in</label>
                          <input type="date" class="form-control">
                        </div>
                        <div class="col-sm-6">
                          <label>Check out</label>
                          <input type="date" class="form-control">
                        </div>
                      </div>
                  </div>
                </div> 
                     <a href=# class="button btn btn-default btn-lg">Check Availability</a>
                </div>
                
                <div id="room" class="tab">
                    <div class="container">
                <h4><span>North Cambridge Rooms</span></h4>
                    <p>This is located at Bareng Drive, Bakakeng Sur Rd, Baguio, Benguet </p>
                    
                    <div class="col-9">
                            <div class="col-md-3">
                                  <div class="image_left">
                                      <img src="img/rooms/deluxemini.jpg" alt="" class="img-responsive"/>
                                  </div>
                            </div>
                            <div class="col-md-2">
                                <h4>No. of Pax</h4>
                                <h4>2 persons per room</h4>            
                            </div>
                            <div class="col-md-2">
                                <h4><span>Price Per Night</span></h4>
                                <h4>&#8369;2000</h4>               
                            </div>
                            <div class="col-md-3">
                                <h4><span>Room Availability</span></h4>
                                <div class="col-sm-6">
                                    <select class="form-control">
                                      <option value="1">1</option>
                                      <option value="2">2</option>
                                      <option value="3">3</option>
                                    </select>
                                </div>               
                            </div>
                        <div class="col-md-2">
                            <div class="gamp1-btn">
                                <a href=# class="button btn btn-default btn-lg">BOOK NOW</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-10">
                      <div class="col-md-3">
                                  <div class="image_left">
                                      <img src="img/rooms/economymini.jpg" alt="" class="img-responsive"/>
                                  </div>
                            </div>
                            <div class="col-md-2">
                                <h4>No. of Pax</h4>
                                <h4>2 persons per room</h4>            
                            </div>
                            <div class="col-md-2">
                                <h4><span>Price Per Night</span></h4>
                                <h4>&#8369;2000</h4>               
                            </div>
                            <div class="col-md-3">
                                <h4><span>Room Availability</span></h4>
                                <div class="col-sm-6">
                                    <select class="form-control">
                                      <option value="1">1</option>
                                      <option value="2">2</option>
                                      <option value="3">3</option>
                                    </select>
                                </div>               
                            </div>
                        <div class="col-md-2">
                            <div class="gamp1-btn">
                                <a href=# class="button btn btn-default btn-lg">BOOK NOW</a>
                            </div>
                        </div>
                    </div>
                        
                    <div class="col-9">
                      <div class="col-md-3">
                                  <div class="image_left">
                                      <img src="img/rooms/standardmini.jpg" alt="" class="img-responsive"/>
                                  </div>
                            </div>
                                                        <div class="col-md-2">
                                <h4>No. of Pax</h4>
                                <h4>2 persons per room</h4>            
                            </div>
                            <div class="col-md-2">
                                <h4><span>Price Per Night</span></h4>
                                <h4>&#8369;2000</h4>               
                            </div>
                            <div class="col-md-3">
                                <h4><span>Room Availability</span></h4>
                                <div class="col-sm-6">
                                    <select class="form-control">
                                      <option value="1">1</option>
                                      <option value="2">2</option>
                                      <option value="3">3</option>
                                    </select>
                                </div>               
                            </div>
                        <div class="col-md-2">
                            <div class="gamp1-btn">
                                <a href=# class="button btn btn-default btn-lg">BOOK NOW</a>
                            </div>
                        </div>
                    </div>
                    </div>
                  
                    <div class="container">
                <h4><span>Montinola Subdivision Rooms</span></h4>
                    <p>This is located at Montinola Subdivision, Baguio City</p>
                    
                    <div class="col-9">
                            <div class="col-md-3">
                                  <div class="image_left">
                                      <img src="img/rooms/famroom.jpg" alt="" class="img-responsive"/>
                                  </div>
                            </div>
                            <div class="col-md-2">
                                <h4>No. of Pax</h4>
                                <h4>12 persons per room</h4>            
                            </div>
                            <div class="col-md-2">
                                <h4><span>Price Per Night</span></h4>
                                <h4>&#8369;2000</h4>               
                            </div>
                            <div class="col-md-3">
                                <h4><span>Room Availability</span></h4>
                                <div class="col-sm-6">
                                    <select class="form-control">
                                      <option value="1">1</option>
                                      <option value="2">2</option>
                                      <option value="3">3</option>
                                    </select>
                                </div>               
                            </div>
                        <div class="col-md-2">
                            <div class="gamp1-btn">
                                <a href=# class="button btn btn-default btn-lg">BOOK NOW</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-10">
                      <div class="col-md-3">
                                  <div class="image_left">
                                      <img src="img/rooms/coupleroom.jpg" alt="" class="img-responsive"/>
                                  </div>
                            </div>
                            <div class="col-md-2">
                                <h4>No. of Pax</h4>
                                <h4>3 persons per room</h4>            
                            </div>
                            <div class="col-md-2">
                                <h4><span>Price Per Night</span></h4>
                                <h4>&#8369;2000</h4>               
                            </div>
                            <div class="col-md-3">
                                <h4><span>Room Availability</span></h4>
                                <div class="col-sm-6">
                                    <select class="form-control">
                                      <option value="1">1</option>
                                      <option value="2">2</option>
                                      <option value="3">3</option>
                                    </select>
                                </div>               
                            </div>
                        <div class="col-md-2">
                            <div class="gamp1-btn">
                                <a href=# class="button btn btn-default btn-lg">BOOK NOW</a>
                            </div>
                        </div>
                    </div>
                        
                    <div class="col-9">
                      <div class="col-md-3">
                                  <div class="image_left">
                                      <img src="img/rooms/blueroom.jpg" alt="" class="img-responsive"/>
                                  </div>
                            </div>
                                                        <div class="col-md-2">
                                <h4>No. of Pax</h4>
                                <h4>4 persons per room</h4>            
                            </div>
                            <div class="col-md-2">
                                <h4><span>Price Per Night</span></h4>
                                <h4>&#8369;2000</h4>               
                            </div>
                            <div class="col-md-3">
                                <h4><span>Room Availability</span></h4>
                                <div class="col-sm-6">
                                    <select class="form-control">
                                      <option value="1">1</option>
                                      <option value="2">2</option>
                                      <option value="3">3</option>
                                    </select>
                                </div>               
                            </div>
                        <div class="col-md-2">
                            <div class="gamp1-btn">
                                <a href=# class="button btn btn-default btn-lg">BOOK NOW</a>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                    
                    
                    <div id="addons" class="tab">
                        <h4><span>Additional Requests</span></h4>
                  
                            <div class="form-group">
                                <label for="comments" accesskey="C"><span class="required">*</span> Your message</label>
                                <textarea name="comments" rows="9" id="comments" class="form-control"></textarea>
                            </div>             
                            <a href=# class="button btn btn-default btn-lg">SUBMIT</a>
                    </div>
                    
                    <div id="details" class="tab">
                        <h4><span>Registration Details</span></h4>
                        <div class="row">
                      
                        </div>
                    </div>
                    
                    
                    <div id="confirmation" class="tab">
                        <h4><span>Confirmation</span></h4>
                        <div class="row">
                      
                        </div>
                    </div>
                </div>
            </div>
        </div>
@stop