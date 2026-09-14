<?php
    $title = "MENG 390L Final Project - Engineering Projects - Henry Demarest";

    include("../../header.php");
?>

    <main>
    <p class="p-4"><a href="../../computer-science/">Projects</a></p>

<div class="ps-5">

    <h1 class="pb-4">Mechatronics Laboratory (MENG 390L) Final Project</h1>
        
    <div class="row">
        <div class="col-sm-6">
        <h4>Project Goal:</h4> 
        <p>The culmination of this course on mechatronics was to works in groups of two or three to program a small robot to complete an obstacle course as fast as possible. There were a certain number of points that could be acquired for hitting different checkpoints and avoiding obstacles.</p>

        <h4>Technical Skills/Concepts Involved:</h4>
            <ol>
            <li>C Programming</li>
            <li>PID Controllers</li>
            <li>Motors/PWM Control</li>
            </ol>

            <h4>Technical Overview:</h4>
            <p> Because of my significant background in computer science and C programming, I took on most of the responsibilities of programming the robot to accomplish this task. My code was based around the following features:</p>
        </div>

        <div class="col-sm-6 "> 
        <center>
        <iframe width="385" height="685" src="https://www.youtube.com/embed/1T0Z-yVCs08" title="MENG 390L - Final Project" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </center>
        </div>
    </div>

        <ol>
            <li> <strong> Waypoints: </strong> Because so much of the task was focused on precisely achieving specific locations on the “field,” it made the most sense to center my control scheme around these locations. I thus precisely measured the location of the center of each of the target circles and input these as (x,y) coordinates into my program. Although they did require a bit of perfecting in order to optimize the run, these waypoints provided a very easy and straightforward way to control the robot’s overall trajectory. </li>
            <li> <strong> Dead-Reckoning: </strong> The only sensors onboard the robot were encoders, so we needed to effectively use dead-reckoning to understand where the robot was on the field. Although this was more accurate than using the IMU, there were some inaccuracies in the encoder that needed to be taken into account. This method also meant that the exact starting position and orientation of the robot was very important so my team devised a way to standardize this starting location. </li>
            <li> <strong> PID Controller: </strong> In order to actually have the robot move towards the next checkpoint, I used a PID controller. Although a simple proportional controller may have been sufficient, we found that the PID controller was effective at correcting for error and reducing the impact on the motor as the robot changes direction once achieving a checkpoint. This PID controller also helped solve a challenging problem which we were facing which was the balance between turning and driving straight towards the next checkpoint. With my controller, the robot would do both, gradually turning towards the target while also driving straight in order to minimize driving time.</li>
        </ol>

        <h4>General Takeaways:</h4>

        <p>I thoroughly enjoyed this project because it gave me the opportunity to program this robot from the ground up to achieve a specific task. I have had significant experience learning C in my various computer science classes, but getting the opportunity to apply it to a robot running in the real world was certainly an exciting experience. The gamification of the project also made it enjoyable as each team tried to continuously best each other’s high score. In the end, my partners and I were successfully able to complete the course and scored one of the highest scores in the class. After our demonstrations, I was proud that the code which had taken me many hours to code and debug was producing a robot that performed very well at the given task.</p>


</div>

 </main>

<?php
    include("../../footer.php");

?>
