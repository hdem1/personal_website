<?php
    $title = "Genetic Algorithm Implementation - Computer Science Projects - Henry Demarest";

    include("../../header.php");
?>

    <main>
    <p class="p-4"><a href="../">Projects</a></p>

<div class="ps-5">

    <h1 class="pb-4">Implementing a Neural Network Genetic Algorithm</h1>


    <div class="row">
        <div class="col-sm-6">
            <h4>Project Goal:</h4>  
            <p>To develop a framework that would allow me to create, train, and test neural networks which I had programmed myself.</p>

            <h4>Technical Skills Involved:</h4>
            <ol>
                <li>Python programming</li>
                <li>Working with OpenAI Gym Framework</li>
                <li>Neural Network creation and genetic algorithms</li>
            </ol>
        </div>

        <div class="col-sm-6 text-center p-2"> 
            <img src="/assets/mountainCar.png" class="img-responsive" width="450">
        </div>
    </div>


        <h4>Technical Overview:</h4>

        <p>I created a python program that would allow me to use the genetic algorithm to train neural networks on various OpenAI Gym challenges. At its base level, the genetic algorithm describes randomly creating a wide range of neural networks and then “breeding” the most successful ones to eventually create a proficient model. In order to create this program, I needed to create my own neural networks which were able to take in input and calculate an output in a nonlinear fashion for which I used a leaky ReLu activation function. I also had to write some code to serve as the API between my program and the OpenAI Gym’s own API. Finally, I created the genetic algorithm that I described above. The code for this project can be found on my github <a href="https://github.com/hdem1/OpenAI-Gym-Genetic-Algorithm">here</a>. It has been able to create models that perform well in the cartpole, mountain car, mountain car continuous, pendulum, lunar lander, acrobot, and bipedal walker environments.</p>
        <p>Although it is not fully completed, I have also begun experimenting with using the NEAT algorithm to make my program be able to adapt to a problem of varying complexity on its own. NEAT stands for NeuroEvolution of Augmenting Topologies (read the original white paper <a href="https://nn.cs.utexas.edu/downloads/papers/stanley.cec02.pdf">here</a>) and it explores a way to make the structure of a neural network evolve alongside the weights and biases that traditionally change during training.</p>


        <h4>Project Process:</h4>

        <p>This project was an entirely personal project that I took on because of my interest in machine learning. I completed it mostly over the summer of 2022 as a way to continue exploring computer science and specifically machine learning. I had always heard about neural networks and had recently started to read about the genetic algorithm, and I figured that it would be easier and more fun to learn about these concepts through actually using them than through just books/videos. I had already had some experience with OpenAI Gym through my <a href="../machine-learning-research/">research project</a>, so this was a natural place for me to turn.</p>
        <p>There were several challenges that I encountered while programming this project. For example, different OpenAI gym environments have different action and observation spaces, meaning that I had to work to make my program as generalizable as possible. Additionally, there was a fair amount of tuning in order to get the model to evolve correctly. In some of the more complicated environments, I needed to teach it some skills in series in order to get a successful model. For example, the Lunar Lander environment is challenging because the majority of neural networks will simply crash into the ground, making a significant barrier for the evolution to get over. Although this is likely possible to overcome through a combination of smarter parameters, luck, and brute force, I instead trained the model to first learn how to maximize time in the “air” before it attempted to deal with landing.</p>
        <p>In the end, I had a lot of fun with this project. I love watching the models evolve, and it was an incredible feeling to come back after several hours and see a lunar lander flying around the screen after watching it crash over and over again earlier that day. I definitely plan to continue with this type of work in the future, hopefully including an implementation of the NEAT algorithm described above.</p>

        
    <div class="row">
        <div class="col-sm-6 text-center">
            <img src="/assets/pendulum.png" class="img-responsive" height="300">
        </div>
        <div class="col-sm-6 text-center">
            <img src="/assets/cartpole.png" class="img-responsive" height="300">
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 text-center">
            <img src="/assets/lunarLander.png" class="img-responsive" height="300">
        </div>
        <div class="col-sm-6 text-center">
            <img src="/assets/newBipedalWalker.png" class="img-responsive" height="300">
        </div>
    </div>
        
        
 </main>

<?php
    include("../../footer.php");

?>
