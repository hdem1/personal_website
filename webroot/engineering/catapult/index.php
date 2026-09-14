<?php
    $title = "Catapult Project - Engineering Projects - Henry Demarest";

    include("../../header.php");
?>

    <main>
    <p class="p-4"><a href="../../computer-science/">Projects</a></p>

<div class="ps-5">

    <h1 class="pb-4">MENG 185: Catapult Project</h1>


    <div class="row">
        <div class="col-sm-6 pt-3">
            <h4>Project Goal:</h4> 
            <p>To design a laser-cut acrylic catapult that would use elastic deformation to launch a projectile (a tootsie roll) the maximum distance. Some constraints included:</p>
            <ul>
                <li>The design could not extend beyond a 4” x 2.75” box</li>
                <li>Stand integration specs which described how it must fit into and be stabilized by the test stand</li>
            </ul>

            <h4>Technical Skills Involved:</h4>
            <ol>
            <li>CAD modeling</li>
            <li>Physics Simulation</li>
            <li>Interactive Design</li>
            </ol>


            <h4>Results:</h4>

            <p>I was able to create a catapult that reliably launched tootsie pops over 4 meters and performed among the top of the class at the competition.</p>

        </div>

        <div class="col-sm-6 text-center pt-5 pb-5"> 
            <img src="/assets/image2.png" class="img-responsive" width="450">
        </div>
    </div>


        <h4>Project Process:</h4>

        <p>In many ways, I over-engineered this simple class project - I was fascinated by the engineering trade-offs involved with its design and put in considerable effort into simulating the dynamics of the system. Even though this wasn’t really necessary for the class, it gave me a great look into how an engineer can translate qualitative considerations into quantitative constraints and how I could leverage my knowledge of physics and computer science to enhance all of my design work. This lab also gave me a much deeper understanding of materials science and the equations associated with the strength and deformation of materials.</p>

        <p>To begin, I quickly identified that this lab was simply a question of trade-offs. One could make the beam thicker so that it had more elastic potential energy, but this also made it more prone to snapping. A longer beam had more energy, but also was more likely to break when it came down to it. One of the most interesting constraints was that the maximum length of the catapult arm would have the launch angle of the tootsie roll be below 45°, which is the optimal angle for maximizing range. Thus, there had to be a balance between the launch angle and the length.</p>
    
        <p>To tackle these constraints, I initially made several assumptions (e.g. picked a random safety factor, arbitrarily chose an angle), and performed the deformation calculations to get an initial design. I then realized that this was a limited way of looking at the problem, and decided to turn to python simulations to get a better understanding of all of the interrelated factors (safety factor, launch angle, etc). Lastly, I implemented a design change that added a small hook to the end of the catapult system, allowing me to make a much thicker catapult that was still able to integrate with the test stand. This simulation-driven approach has helped me tackle many engineering challenges since taking this course.</p>
        
        <div class="row">
            <div class="col-sm-6 text-center p-2">
                <img src="/assets/image6.png" class="img-fluid" width="400" />
            </div>
            <div class="col-sm-6 text-center p-2">
                <img src="/assets/image9.png" class="img-fluid" width="600" />
            </div>
        <div class="row">


</div>

 </main>

<?php
    include("../../footer.php");

?>
