<x-app-layout>
    <x-slot name="title">Car</x-slot>

    <x-slot name="content">
        <div class="container my-5">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4>Car ( <span id="total-car"></span> )</h4>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addcar">
                            Add Car
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container my-3">
            <input type="text" name="search" id="search" placeholder="Search Here..."
                class="form-control form-control-lg w-50 m-auto">
        </div>
        <div class="container">
            <div id="car-table"></div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="addcar" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Car</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                   
                    <div class="modal-body">
                        <form action="" id="addcars" enctype="multipart/form-data">
                            @csrf
                            {{-- <div class="form-group">
                                <label for="">Enter Car Name</label>
                                <input type="text" name="car_name" id="car_name" class="form-control form-control-lg">
                            </div> --}}
                            <div class="form-group">
                                <label for="">Enter Car Brand</label>
                                <select name="car_brand" id="car_brand" class="form-control form-control-lg">
                                    <option disabled selected>Select Car Brand</option>
                                    @foreach ($brand as $cat)
                                    <option value="{{$cat->id}}">{{$cat->car_brand_name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="">Enter Car Model</label>
                                <select name="car_model" id="car_model" class="form-control form-control-lg">
                                    <option disabled selected>Select Car Model</option>
                                   
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="">Enter Car Category</label>
                                <select name="car_id" id="car_id" class="form-control form-control-lg">
                                    <option disabled selected>Select Car category</option>
                                    @foreach ($category as $cat)
                                    <option value="{{$cat->id}}">{{$cat->car_cat_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            
                        


                            <div class="form-group">
                                <label for="">Enter Car Fuel</label>
                                <select name="car_fuel" id="car_id" class="form-control form-control-lg">
                                    <option disabled selected>Select Car Fuel</option>
                                    @foreach ($fuel as $cat)
                                    <option value="{{$cat->id}}">{{$cat->car_fuel_name}}</option>
                                    @endforeach
                                </select>
                            </div>


                            <div class="form-group">
                                <label for="">Enter Car door</label>
                                <select name="num_door" id="num_door" class="form-control form-control-lg">
                                    <option disabled selected>Select Num Door</option>
                                    
                                    <option value="2">2</option>
                                    <option value="4">4</option>
                                    <option value="6">6</option>
                                    
                                </select>
                            </div>


                            {{-- <div class="form-group">
                                <label for="">Enter num site</label>
                                <select name="num_site" id="num_site" class="form-control form-control-lg">
                                    <option disabled selected>Select Num site</option>
                                    
                                    <option value="2">2</option>
                                    <option value="4">5</option>
                                    <option value="4">8</option>
                                    <option value="6">6</option>
                                    
                                </select>
                            </div> --}}

                            <div class="form-group">
                                <label for="">Enter Gear</label>
                                <select name="type_gear" id="type_gear" class="form-control form-control-lg">
                                    <option disabled selected>Select Gear</option>
                                    
                                    <option value=0>Automatic</option>
                                    <option value=1>Manual</option>
                                    
                                    
                                </select>
                            </div>

                            
                            <div class="form-group">
                                <label for="">Enter Car Description</label>
                                <textarea name="desc" id="desc" cols="30" rows="10"
                                    class="form-control form-control-lg"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Enter Car Image</label>
                                <input type="file" name="images[]" accept="image/*" class="form-control form-control-lg" multiple>
                            </div>


                            <div class="form-group">
                                <label for="">Enter Car Price</label>
                                <input type="text" name="price" id="price" class="form-control form-control-lg">
                            </div>
                            <div class="form-group">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="edit-car" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="" id="editcars">
                            @csrf
                            <div id="car-form-data"></div>
                            <div class="form-group">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <Script>
            
        </Script>
    </x-slot>
</x-app-layout>

