<?php
    $title = "Rocket Engine Injector Design - Engineering Projects - Henry Demarest";

    include("../../header.php");
?>

    <main>
    <p class="p-4"><a href="../../computer-science/">Projects</a></p>

<div class="ps-5">

    <h1 class="pb-4">Rocket Engine Injector Design</h1>
        
    <div class="row">
        <div class="col-sm-6">
        <h4>Project Goal:</h4> 
        <p>To fully design a propellant injector for a 200 lbf rocket engine using Nitrous Oxide and IPA.</p>

        <h4>Technical Skills Involved:</h4>
            <ol>
            <li>Fluid Mechanics</li>
            <li>Machining/Manufacturing Plans</li>
            <li>Pressure Sealing</li>
            <li>Material Analysis/Determination</li>
            </ol>

            <h4>Other Skills:</h4>
            <ol>
                <li>Technical Writing</li>
                <li>Research</li>
            </ol>
        </div>

        <div class="col-sm-6 "> 
            <img src="/assets/InjectorBottom.png" width="300">
        </div>
    </div>
        <h4>Technical Overview:</h4>

        <p>This injector was designed to take propellant delivered by the feed system and atomize it as it enters the combustion chamber to result in more efficient combustion. This is a very complicated project and exists at the intersection of several other elements of the engine design, such as the combustion chamber, fluid supply, and electronics and control sensors. It also has to be capable of dealing with intense operational conditions, such as a 675 psi inlet pressure and a chamber temperature of 2795 K. Below, I provided a description of the various parts of the injector design:</p>
        
        <div class="row">
            <div class ="col-sm-6">
                <ul>
                    <li><strong>Injector Orifice Approach</strong> - For our design, a coaxial shear design was chosen because it would be easier to machine than many of the other options. Our final injector will involve 29 of these coaxial shear elements, each composed of a 1.15 mm diameter circle containing 0.711 mm ID hypodermic needles. The oxidizer (nitrous oxide) will pass through the center hole because it should expand more than the fuel (IPA) which will pass around the outside, thus leading to the atomization.</li>
                    <li><strong>Manifold/Inlet Design</strong> - For ease of machining, the injector is going to use a stacked design made from 5 mm aluminum plates. The manifolds will thus be created by machining out gaps between two other plates. In order to make this design possible within the constraints of the forward closure, the inlet pipes must become coaxially positioned, which our design accomplishes with an assortment of bore-through adapters and other connections. It was also important to ensure that there was a sufficient pressure seal between each later, which we achieved using O-rings and thread-wrapping tape.</li>
                    <li><strong>Pressure Transducer</strong> - In order to monitor the chamber pressure, we are planning to incorporate a pressure transducer into the design. The issue is that no pressure transducer can handle the temperatures which it would be subjected to in the combustion chamber. For this reason, we are implementing a stand-off tube which would extend through the forward closure and should delay the transmission of heat to the pressure transducer. Additionally, an insulating paste will be used to further limit the maximum temperature experienced by the sensor. </li>
                </ul>
            </div>
            <div class="col-sm-6 text-center"> 
                <img src="/assets/injectorSideView.png" width="400">
            </div>
        </div>


        <h4>Project Process:</h4>

        <p>This injector design was made as part of my work as the <strong>Technical Lead</strong> of Project Liquid, a group within the Yale Undergraduate Aerospace Association (YUAA) that is seeking to develop a bipropellant rocket engine.  I began work on it during my time as the Thrust Chamber Subteam leader in the spring of 2022 and devoted myself to the nuances of the design over the summer of 2022 as the new technical lead of the project. This specific part of the engine was very interesting because it required a combination of novel engineering work and a thorough understanding of historical designs.</p>
        <p>One challenge that we had encountered in the previous year was a lack of thorough documentation. To remedy this, the team decided to begin writing up a thorough explanation of each component of the design, which we decided to call modules. For each of these modules, we wrote up a Module Design File (MDF) that thoroughly described the constraints, specifications, rationale, manufacturing plan, etc. Thus, a lot of the work involved with this design work was found in the documentation and technical writing that I needed to do to complete this MDF. </p>
        <p>I really enjoyed this project, however, because it let me really deeply explore a topic within aerospace engineering. This is a field about which I am very interested, and I would love my career to one day deal with the type of engineering challenges that I encountered while designing this injector. The project also resembled what I imagine an industry engineering team looked like, as I did collaborate with other members of the team on some design work and CAD modeling. Thus, I think this project presented me with great experience for a professional application because it balanced my individual engineering and design work as the responsible engineer with the teamwork and communication skills necessary to collaborate with a team.</p>



</div>

 </main>

<?php
    include("../../footer.php");

?>
