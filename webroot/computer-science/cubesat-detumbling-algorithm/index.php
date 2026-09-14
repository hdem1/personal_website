<?php
    $title = "CubeSat Detumbling Research - Internship/Research - Henry Demarest";

    include("../../header.php");
?>

    <main>
    <p class="p-4"><a href="../../engineering/">Internship/Research</a></p>

<div class="ps-5">

    <h1 class="pb-4">CubeSat Detumbling Algorithm Research Project</h1>


    <div class="row">
        <div class="col-sm-6">
            <h4>Project Goal:</h4>  
            <p>To design an algorithm that would perform attitude determination and control on a student-built CubeSatellite in low Earth orbit.</p>

            <h4>Technical Skills Involved:</h4>
            <ol>
                <li>Embedded Systems</li>
                <li>Satellite Control Algorithms</li>
                <li>Satellite Simulations in MATLAB/python</li>
            </ol>

            <h4>Other Skills Involved:</h4>
            <ol>
                <li>Long term project organization</li>
                <li>Self-teaching complicated technical concepts</li>
                <li>Presentation/report writing skills</li>
            </ol>
        </div>

        <div class="col-sm-6 text-center p-2"> 
            <img src="/assets/CubeSatPic.png" class="img-responsive" width="450">
        </div>
    </div>

        <h4>Results</h4>
    
        <p>Over the course of the summer, I was able to fully flesh out and simulate the majority of this algorithm. I am now continuing to finalize my design as the Attitude Determination and Control System (ADCS) subteam lead within the organization.</p>


        <h4>Technical Overview:</h4>

        <p>For this project, I was tasked with using the CubeSatellite’s hardware to create a reliable control system, and simulating the efficacy of that system. For attitude determination, the CubeSat’s main sensors are a <strong>magnetometer</strong> and a <strong>sun sensor</strong>. For attitude control, the CubeSat has an actively-controlled <strong>magnetorquer</strong> and a passive <strong>gravity gradient boom </strong>(GGB). The algorithm that I developed relies on different phases to deal with the topic of detumbling:</p>
        <ul>
            <li><strong>Phase 0</strong> occurs when angular velocity is above a certain threshold and relies on natural eddy currents to dissipate rotational energy. </li>
            <li><strong>Phase 1</strong> describes the reduction of the CubeSat’s rotational velocity through the use of the B-dot algorithm by which magnetorquers are used to counteract rotations observed by the magnetometers.</li>
            <li><strong>Phase 2</strong> describes the pointing of the CubeSat and relies on the TRIAD algorithm to calculate the current orientation from the magnetometer, sun sensor, and position data. </li>
            <li><strong>Phase 3</strong> describes the extension of the GGB which should cause the further reduction of angular velocity and the addition of a passive restorative force on the CubeSat’s rotation. I established very specific criteria for the beginning of this extension and various safeguards to ensure that the extension doesn’t cause the CubeSat to enter a dangerous state.</li>      
            <li><strong>Phase 4</strong> involves the utilization of the B dot algorithm with a lower gain value to continue damping out oscillatory motion while reducing power consumption.</li>
        </ul>

	    <p>My project involved also creating a MATLAB program that would incorporate the detumbling algorithm into a simulation of the CubeSat’s dynamics. I also wrote several python scripts to analyze the physics at play with the passive stabilization caused by the GGB.</p> 

        <div class="row">
            <div class="col-sm-6 text-center p-2">
                <img src="/assets/CubeSatGraph1.png" class="img-fluid" width="400" />
            </div>
            <div class="col-sm-6 text-center p-2">
                <img src="/assets/CubeSatGraph2.png" class="img-fluid" width="400" />
        </div>


        <h4>Project Process:</h4>

        <p>Since the beginning of my first year, I have been a part of the CubeSat team, which is part of the Yale Undergraduate Aerospace Association (YUAA) that is building a satellite to be launched into low earth orbit as part of NASA’s CubeSat Launch Initiative. This 2U satellite carries a payload that will measure cosmic rays at various points in Earth orbit, along with a custom-built gravity gradient boom. When I joined the product, I was part of the Attitude Determination and Control System subteam, which had become responsible for almost all mechanical components on the spacecraft.</p>
        <p>Based on this experience and my acceptance into the Yale First-Year Summer Research Fellowship, I was able to stay in New Haven, CT over the summer of 2022 to conduct research on the CubeSat’s detumbling algorithm. Taking on this entire project on my own was a challenge, but I was able to organize my time and leverage my resources so that I could tackle it efficiently.</p>
	    <p>While this project taught me a lot technically about MATLAB, satellite dynamics, mathematical orientation representations, and control algorithms, I think the most important lesson had to do with the challenges to make a robust and reliable real-world system. Classes have prepared me well to deal with engineering and computer science problems with clear inputs, sufficient data, and defined solutions, but this project did not include any of these. Being able to handle noisy inputs that weren’t able to fully define the CubeSat’s state taught me a lot about data processing and filtering such as the Kalman filter. Additionally, I had to use these incomplete inputs to create a “best guess” about the best way to control the magnetorquers, which are imperfect control devices because of how their torque varies based on the CubeSat’s orientation. I know that being forced to work with these challenges will help me create more robust mechanical and software systems.</p>
        
        
 </main>

<?php
    include("../../footer.php");

?>
