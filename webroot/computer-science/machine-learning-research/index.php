<?php
    $title = "Machine Learning Research - Internship/Research - Henry Demarest";

    include("../../header.php");
?>

    <main>
    <p class="p-4"><a href="../../engineering/">Internship/Research</a></p>

<div class="ps-5">

    <h1 class="pb-4">Machine Learning Research Project</h1>


    <div class="row">
        <div class="col-sm-6">
            <h4>Project Goal:</h4>  
            <p>To test the effectiveness of a new reinforcement learning algorithm in a more complex OpenAI Gym Environment</p>

            <h4>Technical Skills Involved:</h4>
            <ol>
                <li>Reinforcement Learning Algorithms</li>
                <li>Large-scale data collection and analysis</li>
                <li>Python programming and multithreading</li>
                <li>Proficient with the OpenAI Gym testing framework</li>
            </ol>

            <h4>Other Skills Involved:</h4>
            <ol>
                <li>Long term project organization</li>
                <li>Self-teaching complicated technical concepts</li>
                <li>Presentation/report writing skills</li>
            </ol>
        </div>

        <div class="col-sm-6 text-center p-2"> 
            <img src="/assets/bipedalWalkerTraining.png" class="img-responsive" width="450">
        </div>
    </div>

        <h4>Results</h4>
    
        <p>I completed my project with guidance from mentors at IBM during the 2020-2021 school year and competed with it in various science competitions. I was nominated as a regional presenter at my local Junior Science and Humanities Symposium, and I earned the <strong>Mu Alpha Theta award</strong> at the local Westchester Science and Engineering Fair (WESEF). Additionally, I won <strong>1st place in the Computer Science category</strong> of the New York State Science and Engineering Fair (NYSSEF), which allowed me to participate in the <strong>International Science and Engineering Fair (ISEF)</strong> with students from all over the world. My paper for this competition can be seen below.
        </p>


        <h4>Research Abstract:</h4>

        <p> Reinforcement learning is a form of machine learning that trains a digital model by associating a reward value with different actions based on how beneficial they are. Several algorithms have been developed to facilitate the management of Q-tables, data structures used to store information about the effectiveness of each action at each state. A new algorithm, known as Robust Stochastic Operators, has been shown to perform better than pre-existing algorithms, like the Bellman or Consistent Bellman, within relatively simple training environments. This experiment sought to determine if these benefits of the Robust Stochastic Operators hold true in more complex environments as well. To do this, a program that compares this algorithm and pre-existing algorithms was created for the relatively complex BipedalWalker-v3 environment in OpenAI Gym. After training the model with these different algorithms, the RSO algorithm had a higher average reward and a longer average survival time, which indicates that the benefits of this algorithm did in fact, hold true. This improvement could have significant implications in numerous new technologies that utilize machine learning, such as autonomous vehicles. </p>
        <div class="text-center">
                <img src="/assets/researchResults.png" class="img-fluid" width="800" />
            </div>

        <h4>Project Process:</h4>

        <p>I began the science research process in 2018 during my sophomore year of high school by reading a lot about various fields I was interested in and reaching out to potential mentors who could support me in my research. In 2019, I was able to connect with two researchers at IBM who introduced me to this specific research topic and agreed to provide some advice throughout the process. I then dove into the research process, reading up on the literature of the field, writing my experiment code, and beginning to collect data and iterate upon my code throughout 2020. I was fortunate that my project was so independent because it was completely unaffected by Covid-19.</p>
        <p>As someone who had not had any machine learning experience before this project, it was incredible to learn how to make my computer learn before my eyes. It was especially exciting given that I was testing my algorithms in the BipedalWalker-v3 environment in OpenAI gym so I got to watch as the agent attempted to make a small character walk across the screen. This interest in machine learning has remained a dominant interest to this day, leading to other projects such as my Neural Network Genetic Algorithm (linked).</p>
        <p>Lastly, this project really helped me develop many skills that apply to research. For example, participating in competitions required me to do a substantial amount of technical writing, such as the paper seen below. Additionally, it allowed me to develop my presentation skills, becoming a more effective communicator of complex technical details.</p>

        

        <div class="text-center">
        <iframe class="col-lg-12 col-md-12 col-sm-12" src="Research Paper - Henry Demarest.pdf" type="application/pdf" width="850" height="1150"></iframe>
        </div>
        
        
 </main>

<?php
    include("../../footer.php");

?>
