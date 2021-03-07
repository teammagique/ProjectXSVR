@extends('base')

@section('body')
<div class="dashboard-container">
    
    {{-- <x-navigation :user="$user"/>
    <div class="clearfix"></div>
    <div class="dashboard-container">
        <x-sidebar :user='$user'/> --}}
    <div class="dashboard-content-container" data-simplebar>
        <div class="dashboard-content-inner" >
            
            <!-- Dashboard Headline -->
            <div class="dashboard-headline">
                <h3>Create Profile
                </h3>
    
                <!-- Breadcrumbs -->
                <nav id="breadcrumbs" class="dark">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Dashboard</a></li>
                        <li> create Profile </li>
                    </ul>
                </nav>
            </div>
    
            <!-- Row -->
            <div class="row justify-content-center">
    
                <!-- Dashboard Box -->
                <div class="col-xl-6 ">
                    <div class="dashboard-box margin-top-0">
    
    
                        <!-- Headline -->
                        <div class="headline">
                            <h3><i class="icon-feather-folder-plus"></i> Complete your profile</h3>
                        </div>
    
                        <div class="content with-padding padding-bottom-10">
                            <div class="row justify-content-center">
                            <form method="POST" action="{{route('profile.store')}}" >
                                @csrf
                                <div class="submit-field ">
                                    <h5>Professional Title</h5>
                                <input type="text" name='title' value="{{old('title')}}" class="with-border @error('title') with-border-danger @enderror" placeholder="eg software developer">
                                    @error('title')
                                    <div class="notification error ">
                                    <p>{{$message}}</p>
                                        <a class="close" href="#"></a>
                                    </div>
                                    @enderror
                                </div>
                                <div class="submit-field">
                                    <h5>Professional overview</h5>
                                    <textarea cols="30" rows="5" name="bio" placeholder="" class="with-border @error('bio') with-border-danger @enderror"></textarea>
                                    @error('bio')
                                    <div class="notification error ">
                                    <p>{{$message}}</p>
                                        <a class="close" href="#"></a>
                                    </div>
                                    @enderror
                                    <div class="uploadButton margin-top-30">
                                        <input class="uploadButton-input" type="file" value="{{old('photo')}}" accept="image/* ", application/pdf" id="upload" multiple="">
                                        <label class="uploadButton-button ripple-effect" for="upload">Upload Files</label>
                                        <span class="uploadButton-file-name">file to be used as profile image<br></span>
                                    </div>
                                  
                                    @error('photo')
                                    <div class="notification error ">
                                    <p>{{$message}}</p>
                                        <a class="close" href="#"></a>
                                    </div>
                                    @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <button type="submit" class="button full-width ripple-effect big margin-top-30"> Create profile <button/>
                                    </div>
                                </div>
    
                            </form>   
                            </div>
                        </div>
                    </div>
                </div>
    
               
    
            </div>
            <!-- Row / End -->
    
            <!-- Footer -->
           
            <!-- Footer / End -->
    
        </div>
    </div>
    </div>
    
</div>
@endsection