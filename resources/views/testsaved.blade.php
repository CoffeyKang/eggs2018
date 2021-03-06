@extends('layouts.app')

@section('content')
    <script>
         $(window).ready(function(){
                $('.links a').css('border','2px solid #ffbc27');  
                $("#nav").css('background-color','#fbbc27');
                $("#nav").css('border-color','transparent');
                
                $('.links a').hover(function(){
                    $(this).css('border','2px solid white');
                    $(this).css('color','white');
                },function(){
                    $(this).css('border','2px solid #fbbb27'); 
                    $(this).css('color','black');
                    
                });   
               
                
                
            });
    </script> 

    <div class="table-responsive-sm">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Image</th>
                <th scope="col">Filename</th>
                <th scope="col">Original Filename</th>
                <th scope="col">Resized Filename</th>
            </tr>
            </thead>
            <tbody>
            @foreach($photos as $photo)
                <tr>
                    <td><img src="/images/{{ $photo->resized_name }}"></td>
                    <td>{{ $photo->filename }}</td>
                    <td>{{ $photo->original_name }}</td>
                    <td>{{ $photo->resized_name }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@stop