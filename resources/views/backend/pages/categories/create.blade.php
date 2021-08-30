@extends('backend.layouts.master')

@section('title', 'Categories')

@section('sub_title', 'create')
    
@section('content')
    <section class="content">
        <div class="container-fluid">
            <!-- Multi Column -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Add New Category
                            </h2>
                        </div>
                        <div class="body">
                            <form id="upload" enctype="multipart/form-data">
                                @csrf
                                <div class="row clearfix">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="category_title">Category Title</label>
                                            <div class="form-line">
                                                <input type="text" name="title" class="form-control" placeholder="Enter category title...">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="category_description">Category Description</label>
                                            <div class="form-line">
                                                <textarea name="description" cols="30" rows="5" class="form-control" placeholder="Enter category description here..."></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- File Upload | Drag & Drop OR With Click & Choose -->
                                <div class="row clearfix">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div id="previewsContainer" class="dropzone">
                                            <div class="dz-message">
                                                <div class="drag-icon-cph">
                                                    <i class="material-icons">touch_app</i>
                                                </div>
                                                <h3>Drop files here or click to upload.</h3>
                                            </div>
                                            <div class="fallback">
                                                <input name="file" type="file" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- #END# File Upload | Drag & Drop OR With Click & Choose -->

                                <div class="row clearfix">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <input type="submit">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Multi Column -->
        </div>
    </section>
    
@endsection

@section('scripts')
    <script>
        Dropzone.autoDiscover = false;
        new Dropzone("#upload",{
            clickable: ".dropzone",
            url: "{{ route('categories.saveCategory') }}",
            previewsContainer: "#previewsContainer",
            uploadMultiple: true,
            autoProcessQueue: false,
            init() {
                var myDropzone = this;
                this.element.querySelector("[type=submit]").addEventListener("click", function(e){
                    e.preventDefault();
                    e.stopPropagation();
                    myDropzone.processQueue();
                    
                });
                this.on("success", function(file, responseText) {
                    window.location("{{ route('categories.getAllCategories') }}");
                });
            }
            // success: function(file, response){
            //     alert("Test2");
            // }
        });

    </script>
@endsection
