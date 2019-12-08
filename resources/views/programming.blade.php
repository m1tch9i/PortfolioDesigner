@include('header')
<div>
    <br>
    <br>
    <br>
    <div class="row">
        <div class="col-9 offset-1 titleHeader" data-aos="zoom-out" data-aos-duration="1800">
            PROGRAMMING
        </div>
    </div>
    <div class="row">
        <div class="col-9 offset-1 subtitleHeader" data-aos="zoom-out" data-aos-duration="1800">
            C# SCRIPT
        </div>
    </div>
    <br>
    <br>
    <br>
    <div class="row">
        <div class="col-9 offset-1 contentHeader" data-aos="fade-right" data-aos-duration="1800">
            Important Scripts For The Game
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <div class="row">
        <div class="col-9 offset-1">
            <div class="content" data-aos="fade-right" data-aos-duration="1800">
                I was never a programmer by training. I was not well-versed in any programming language until my final year project. However, since this project my knowledge and understanding of C# scripting grew exponentially.
                I spent a lot of time reading the Unity API Scripting Manual and watched many tutorial videos but only the ones I needed for the game my team and I were developing. Here are the most important scripts that were central to the functionality of our game project.
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="row">
        <div class="col-md-5 offset-1">
            <img style="width:650px;" data-aos="flip-left" data-aos-duration="1800" src="{{url('/images/CodeController.jpg')}}" alt="">
            <br>
            <br>
            <div class="programmingTitle" data-aos="fade-left" data-aos-duration="1800">
            </div>
        </div>
        <div class="col-md-5 offset-1">
            <img style="width:650px;" data-aos="fade-left" data-aos-duration="1800" src="{{url('/images/GIFMovement.gif')}}" alt="">
            <br>
            <br>
            <div class="actionTitle" data-aos="fade-left" data-aos-duration="1800">
                Controller Code
            </div>
            <br>
            <div class="actionDescription" data-aos="fade-left" data-aos-duration="1800">
                Here is a reconstructed script derived from a character movement asset pack. Joystick controls for character movement; additionally scripted to orient controls regardless of camera angle change.
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="row">
        <div class="col-md-5 offset-1">
            <img style="width:650px;" data-aos="fade-right" data-aos-duration="1800" src="{{url('/images/GIFCamera.gif')}}" alt="">
        </div>
        <div class="col-md-5 offset-1">
            <img style="width:900px;" data-aos="flip-right" data-aos-duration="1800" src="{{url('/images/CodeCamera.jpg')}}" alt="">
            <br>
            <br>
            <div class="programmingTitle" data-aos="fade-right" data-aos-duration="1800">
                Camera Code
            </div>
            <br>
            <div class="actionDescription" data-aos="fade-right" data-aos-duration="1800">
                Here is another reconstructed script derived from a character movement pack that included a camera script aswell. Camera follow script with offset settings adjustable in serialized fields in Unity Engine.
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="row">
        <div class="col-md-5 offset-1">
            <img style="width:650px; height: 400px;" data-aos="flip-left" data-aos-duration="1800" src="{{url('/images/CodeCameraCollision.jpg')}}" alt="">
        </div>
        <div class="col-md-5 offset-1">
            <img style="width:650px;" data-aos="fade-left" data-aos-duration="1800" src="{{url('/images/GIFCameraCollision.gif')}}" alt="">
            <br>
            <br>
            <div class="actionTitle" data-aos="fade-left" data-aos-duration="1800">
                Camera Collision Code
            </div>
            <br>
            <div class="actionDescription" data-aos="fade-left" data-aos-duration="1800">
                Here is another reconstructed script derived from a character movement pack that included a camera script aswell. The original script was heavily incompatible for the indoors map of my project. Included in the camera script was these lines of code to enable the camera to automatically switch to a first-person point of view whenever a collision was detected.
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="row">
        <div class="col-md-5 offset-1">
            <img style="width:650px;" data-aos="fade-right" data-aos-duration="1800" src="{{url('/images/GIFPickUp.gif')}}" alt="">
            <br>
            <br>
            <div class="actionTitle" data-aos="fade-right" data-aos-duration="1800">
                Pickup Code
            </div>
            <br>
            <div class="actionDescription" data-aos="fade-right" data-aos-duration="1800">
                Here is a script made specifically made for my project. This script is central as it implements our key game mechanic in the real world mode of the game. It is a considerably basic script that is easy to manage. It includes a function similiar to another script I made to have UI appear when the Player comes within the range of colliders. This script is also to allow the Player to pick up the inventory holder (in this instance a noteboook to collect items that may fit into a book) and then only enable the ability to collect items when the item acting as the inventory holder has been collected as well.
            </div>
        </div>
        <div class="col-md-5 offset-1">
            <img style="width:600px;" data-aos="flip-right" data-aos-duration="1800" src="{{url('/images/CodePickUp2.jpg')}}" alt="">
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="row">
        <div class="col-md-5 offset-1">
            <img style="width:400px;" data-aos="flip-left" data-aos-duration="1800" src="{{url('/images/CodeCollectLight.jpg')}}" alt="">
            <br>
            <br>
            <div class="programmingTitle" data-aos="fade-left" data-aos-duration="1800">
                Collect Light Code
            </div>
            <br>
            <div class="actionDescription" data-aos="fade-left" data-aos-duration="1800">
                Here is a very basic script made to allow a player to collect GameObjects tagged under "Orbs" to increase the brightness of the lights in the scene. This script coordinates with a script made to implement a mechanic that dims the scene lights at a set decay rate. This is also a central script as it is part of the game mechanic of the fantasy world mode of the game.
            </div>
        </div>
        <div class="col-md-5 offset-1">
            <img style="width:650px;" data-aos="fade-left" data-aos-duration="1800" src="{{url('/images/GIFCollectLight.gif')}}" alt="">
        </div>
    </div>
</div>
@include('footer')
