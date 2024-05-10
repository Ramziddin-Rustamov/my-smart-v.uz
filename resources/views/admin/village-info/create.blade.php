<!-- resources/views/village_infos/create.blade.php -->

@extends('admin.admin_layout.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-2">
                <div class="card">
                    <div class="card-header">
                        Create Village Info
                    </div>
                    <div class="card-body">
                        <form action="{{ route('village_infos.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="what_reasons">What Reasons</label>
                                <input type="text" name="what_reasons" id="what_reasons" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="working_hours">Working Hours</label>
                                <input type="text" name="working_hours" id="working_hours" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="additional_information">Additional Information</label>
                                <textarea name="additional_information" id="additional_information" class="form-control" rows="3" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="main_email">Main Email</label>
                                <input type="email" name="main_email" id="main_email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="tel" name="phone" id="phone" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="map_location">Map Location</label>
                                <input type="text" name="map_location" id="map_location" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="population">Population</label>
                                <input type="number" name="population" id="population" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="youth">Youth</label>
                                <input type="number" name="youth" id="youth" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="retailers">Retailers</label>
                                <input type="number" name="retailers" id="retailers" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="schools">Schools</label>
                                <input type="number" name="schools" id="schools" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="kindergartens">Kindergartens</label>
                                <input type="number" name="kindergartens" id="kindergartens" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="mosques">Mosques</label>
                                <input type="number" name="mosques" id="mosques" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="shops">Shops</label>
                                <input type="number" name="shops" id="shops" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="hospital">Hospital</label>
                                <input type="number" name="hospital" id="hospital" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="other_services">Other Services</label>
                                <input type="number" name="other_services" id="other_services" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="video1">Video 1</label>
                                <input type="text" name="video1" id="video1" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="video1_image_cover">Video 1 Image Cover</label>
                                <input type="text" name="video1_image_cover" id="video1_image_cover" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="video2">Video 2</label>
                                <input type="text" name="video2" id="video2" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="video2_image_cover">Video 2 Image Cover</label>
                                <input type="text" name="video2_image_cover" id="video2_image_cover" class="form-control">
                            </div>
                            <!-- Add other input fields here if needed -->
                            <button type="submit" class="btn btn-primary  my-3">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
