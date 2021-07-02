@extends('admin.master')
@section('content')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!--== BODY CONTNAINER ==-->
 <div class="container-fluid sb2">
    <div class="row">
        @include('admin.sidebar')
        @foreach ($About as $Setting)
        <!--== BODY INNER CONTAINER ==-->
        <div class="sb2-2">
            <div class="sb2-2-2">
                <ul>
                    <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                    </li>
                    <li class="active-bre"><a href="#">System Settings</a>
                    </li>
                    <li class="page-back"><a href="{{url('/')}}/admin/home"><i class="fa fa-backward" aria-hidden="true"></i> Dashboard </a>
                    </li>
                </ul>
            </div>
            <div class="sb2-2-3">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box-inn-sp">
                            <div class="inn-title">
                                <h4>What We Do</h4>
                               
                            </div>
                            <div class="tab-inn">
                                <form method="post" action="{{url('/')}}/admin/edit_About" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <div class="row">
                                        <div class="input-field col s6">
                                            <input autocomplete="off" type="text" name="showreel" value="{{$Setting->showreel}}" class="validate">
                                            <label for="website">Showreel</label>
                                        </div>
                                    </div>
                                    <input autocomplete="off" type="hidden" name="about" value="{{$Setting->about}}" class="validate">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <textarea required id="article-ckeditor" name="what_we_do" class="materialilze-textarea" placeholder="content">{{$Setting->what_we_do}}</textarea>
                                        </div>
                                    </div><br><br>

                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input type="submit"  value="Save Changes" class="waves-effect waves-light btn-large">
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--== BODY INNER CONTAINER ==-->
        @endforeach

    </div>
</div>


@endsection