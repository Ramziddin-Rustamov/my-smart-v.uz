@extends('admin.admin_layout.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-19 offset-2">
                <div class="card-body">
                    <form action="{{ route('village_infos.update', $villageInfo->id) }}" method="post">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="what_reasons">What Reasons</label>
                            <input type="text" name="what_reasons" id="what_reasons" class="form-control" value="{{ $villageInfo->what_reasons }}" required>
                        </div>
                        <div class="form-group">
                            <label for="working_hours">Working Hours</label>
                            <input type="text" name="working_hours" id="working_hours" class="form-control" value="{{ $villageInfo->working_hours }}" required>
                        </div>
                        <div class="form-group">
                            <label for="additional_information">Additional Information</label>
                            <textarea name="additional_information" id="additional_information" class="form-control" rows="3" required>{{ $villageInfo->additional_information }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="main_email">Main Email</label>
                            <input type="email" name="main_email" id="main_email" class="form-control" value="{{ $villageInfo->main_email }}">
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="tel" name="phone" id="phone" class="form-control" value="{{ $villageInfo->phone }}">
                        </div>
                        <div class="form-group">
                            <label for="map_location">Map Location</label>
                            <input type="text" name="map_location" id="map_location" class="form-control" value="{{ $villageInfo->map_location }}">
                        </div>
                        <div class="form-group">
                            <label for="population">Population</label>
                            <input type="number" name="population" id="population" class="form-control" value="{{ $villageInfo->population }}">
                        </div>
                        <div class="form-group">
                            <label for="youth">Youth</label>
                            <input type="number" name="youth" id="youth" class="form-control" value="{{ $villageInfo->youth }}">
                        </div>
                        <div class="form-group">
                            <label for="retailers">Retailers</label>
                            <input type="number" name="retailers" id="retailers" class="form-control" value="{{ $villageInfo->retailers }}">
                        </div>
                        <div class="form-group">
                            <label for="schools">Schools</label>
                            <input type="number" name="schools" id="schools" class="form-control" value="{{ $villageInfo->schools }}">
                        </div>
                        <div class="form-group">
                            <label for="kindergartens">Kindergartens</label>
                            <input type="number" name="kindergartens" id="kindergartens" class="form-control" value="{{ $villageInfo->kindergartens }}">
                        </div>
                        <div class="form-group">
                            <label for="mosques">Mosques</label>
                            <input type="number" name="mosques" id="mosques" class="form-control" value="{{ $villageInfo->mosques }}">
                        </div>
                        <div class="form-group">
                            <label for="shops">Shops</label>
                            <input type="number" name="shops" id="shops" class="form-control" value="{{ $villageInfo->shops }}">
                        </div>
                        <div class="form-group">
                            <label for="hospital">Hospital</label>
                            <input type="number" name="hospital" id="hospital" class="form-control" value="{{ $villageInfo->hospital }}">
                        </div>
                        <div class="form-group">
                            <label for="other_services">Other Services</label>
                            <input type="number" name="other_services" id="other_services" class="form-control" value="{{ $villageInfo->other_services }}">
                        </div>
                        <div class="form-group">
                            <label for="video1">Video 1</label>
                            <input type="text" name="video1" id="video1" class="form-control" value="{{ $villageInfo->video1 }}">
                        </div>
                        <div class="form-group">
                            <label for="video1_image_cover">Video 1 Image Cover</label>
                            <input type="text" name="video1_image_cover" id="video1_image_cover" class="form-control" value="{{ $villageInfo->video1_image_cover }}">
                        </div>
                        <div class="form-group">
                            <label for="video2">Video 2</label>
                            <input type="text" name="video2" id="video2" class="form-control" value="{{ $villageInfo->video2 }}">
                        </div>
                        <div class="form-group">
                            <label for="video2_image_cover">Video 2 Image Cover</label>
                            <input type="text" name="video2_image_cover" id="video2_image_cover" class="form-control" value="{{ $villageInfo->video2_image_cover }}">
                        </div>

                        <button type="submit" class="btn btn-primary mt-4">Update</button>
                    </form>
                  </div>
                </div>
            </div>
        </div>
    @endsection
