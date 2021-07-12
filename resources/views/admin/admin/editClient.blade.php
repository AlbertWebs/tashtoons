@extends('admin.master')
@section('content')
<!-- Remember to include jQuery :) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

<!-- jQuery Modal -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
<style>
    .modal a.close-modal{
        top:0px !important;
        right:0px !important;
    }
</style>
<!--== BODY CONTNAINER ==-->
 <div class="container-fluid sb2">
    <div class="row">
        @include('admin.layout.sidebar')

        <!--== BODY INNER CONTAINER ==-->
        
        <div class="sb2-2">
            <div class="sb2-2-2">
                <ul>
                    <li><a href="index.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                    </li>
                    <li class="active-bre"><a href="#"> Edit Client</a>
                    </li>
                    <li class="page-back"><a href="{{url('/')}}/admin/"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
                    </li>
                </ul>
               
            </div>
            <div class="sb2-2-add-blog sb2-2-1">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4>Edit Clients</h4>
                        <p> Editing <strong>{{$Client->title}}</strong> </p>
                        <center>
                            @if(Session::has('message'))
                                          <div class="alert alert-success">{{ Session::get('message') }}</div>
                           @endif
           
                           @if(Session::has('messageError'))
                                          <div class="alert alert-danger">{{ Session::get('messageError') }}</div>
                           @endif
                        </center>
                    </div>
                    <div class="bor">
                        <form method="POST" action="{{url('/')}}/admin/edit_Client/{{$Client->id}}" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="row">
                                <div class="input-field col s12">
                                    <input value="{{$Client->title}}" autocomplete="off" name="title" id="list-title" type="text" class="validate" required>
                                    <label for="list-title">Client Name</label>
                                </div>
                            </div>
                       
                            <div class="row">
                                <div class="input-field col s12">
                                    <textarea required name="link" class="materialize-textarea">{{$Client->link}}</textarea>
                                    <label for="textarea1">Client Website</label>
                                </div>
                            </div>
                            
                           
                            <div class="row">
                                <div class="input-field col s12">
                                    <input required autocomplete="off" value="{{Auth::user()->name }}" id="post-auth" name="author" type="text" class="validate">
                                    <label for="post-auth">Author Name</label>
                                </div>
                            </div>
                            {{-- Images --}}
                                 {{-- Preview --}}
                            {{-- Style --}}
                            <style>
                                .btn-file {
                                    position: relative;
                                    overflow: hidden;
                                }
                                .btn-file input[type=file] {
                                    position: absolute;
                                    top: 0;
                                    right: 0;
                                    min-width: 100%;
                                    min-height: 100%;
                                    font-size: 100px;
                                    text-align: right;
                                    filter: alpha(opacity=0);
                                    opacity: 0;
                                    outline: none;
                                    background: white;
                                    cursor: inherit;
                                    display: block;
                                }

                                #img-upload{
                                    width: 100%;
                                }
                            </style>
                            {{-- Style --}}
                            <div class="row">
                            <div class="">
                                <div class="input-field col s12">
                                    <div class="form-group">
                                        <label>Change Image</label>
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                <span class="btn btn-default btn-file">
                                                    Browse… <input name="image_one" type="file" id="imgInp">
                                                </span>
                                            </span>
                                            <input type="text" class="form-control" readonly>
                                        </div>
                                        <img class="image-preview" style="width:auto;" src="{{url('/')}}/uploads/clients/{{$Client->image}}" id='img-upload'/>
                                    </div>
                                </div>
                                </div>
                            </div>
                            {{-- Preview --}}

                            {{-- Images --}}
                            
                            <div class="row">
                                <div class="input-field col s12">
                                    <input  type="submit" class="waves-effect waves-light btn-large" value="Save Changes">
                                </div>
                            </div>
                            <input type="hidden" name="image_one_cheat" value="{{$Client->image}}">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--== BODY INNER CONTAINER ==-->

    </div>
</div>


@endsection