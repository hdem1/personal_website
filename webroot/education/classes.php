<?php
$courses = [
    "Spring 2026 (Stanford University)" => [
        ["AA 203", "Optimal and Learning-Based Control", 3.0],
        ["AA 278", "Lunar Positioning, Navigation, and Timing", 3.0],
        ["CS 231N", "Deep Learning for Computer Vision", 3.0],
        ["AA 290", "Research in AeroAstro (Prof. Gao)", 1.0],
    ],
    "Winter 2026 (Stanford University)" => [
        ["AA 279A", "Space Mechanics", 3.0],
        ["CME 364A", "Convex Optimization", 3.0],
        ["ENGR 205", "Introduction to Control Design Techniques", 3.0],
        ["AA 290", "Research in AeroAstro (Prof. Gao)", 1.0],
    ],
    "Fall 2025 (Stanford University)" => [
        ["AA 228", "Decision Making Under Uncertainty", 3.0],
        ["AA 242A", "Classical Dynamics", 3.0],
        ["AA 272", "Global Positioning Systems", 3.0],
        ["AA 290", "Research in AeroAstro (Prof. Gao)", 1.0],
    ],
    "Spring 2025 (Yale University)" => [
        ["ART 114", "Basic Drawing", 1.0],
        ["ART 138", "Digital Photography", 1.0],
        ["CPSC 410", "Physics Simulation for Movies", 1.0],
        ["ENGL 1020", "Reading & Writing the Modern Essay", 1.0],
        ["MENG 488L", "Mechanical Design Capstone", 0.5],
    ],
    "Fall 2024 (Yale University)" => [
        ["CPSC 411", "Building Game Engines", 1.0],
        ["CPSC 427", "Advanced C++ Programming", 1.0],
        ["CPSC 490", "Computer Science Capstone", 1.0],
        ["MENG 383", "Dynamics", 1.0],
        ["MENG 487L", "Mechanical Design Capstone", 1.0],
    ],
    "Spring 2024 (Yale University)" => [
        ["CPSC 338", "Digital Systems", 1.0],
        ["MENG 363L", "Fluid Mechanics and Thermodynamics Lab", 1.0],
        ["MENG 389", "Heat Transfer", 1.0],
        ["MENG 405", "Intro to Embedded Robotics Systems", 1.0],
        ["MENG 425", "Advanced Design and Analysis of Machines", 1.0],
        ["PHYS 762", "Lab Instrument Design and Mechanical Arts (Machine Shop)", 0.0],
    ],
    "Fall 2023 (Yale University)" => [
        ["ARCG 110", "Intro to Art History: Decorative Arts", 1.0],
        ["CPSC 472", "Intelligent Robotics", 1.0],
        ["CPSC 478", "Computer Graphics", 1.0],
        ["MENG 325", "Machine Parts and Manufacturing", 1.0],
        ["MENG 443", "Fundamentals of Robots", 1.0],
        ["MENG 469", "Aerodynamics", 1.0],
    ],
    "Spring 2023 (Yale University)" => [
        ["CPSC 365", "Algorithms", 1.0],
        ["FILM 232", "Classical Hollywood Narratives", 1.0],
        ["MATH 244", "Discrete Mathematics", 1.0],
        ["MENG 211", "Thermodynamics", 1.0],
        ["MENG 390L", "Mechatronics Laboratory", 1.0],
        ["MENG 400", "Computer-Aided Design (CAD)", 1.0],
    ],
    "Fall 2022 (Yale University)" => [
        ["CPSC 323", "Systems Programming and Computer Organization", 1.0],
        ["EENG 200", "Introduction to Electronics", 1.0],
        ["MENG 280", "Strength and Deformation", 1.0],
        ["MENG 285", "Intro to Material Science", 1.0],
        ["MENG 286L", "Material Science Lab", 1.0],
        ["MENG 361", "Fluid Mechanics", 1.0],
    ],
    "Spring 2022 (Yale University)" => [
        ["CPSC 223", "Data Structures and Programming Techniques", 1.0],
        ["ENAS 194", "Ordinary and Partial Differential Equations", 1.0],
        ["MENG 185", "Mechanical Design", 1.0],
        ["PHYS 206L", "Modern Physical Measurements", 0.5],
        ["PHYS 261", "Intensive Introductory Physics", 1.0],
        ["PLSC 257", "Bioethics and Law", 1.0],
    ],
    "Fall 2021 (Yale University)" => [
        ["LATN 450", "Roman Dining", 1.0],
        ["MATH 225", "Linear Algebra", 1.0],
        ["NELC 026", "Origins of Civilization", 1.0],
        ["PHYS 205L", "Modern Physical Measurements", 0.5],
        ["PHYS 260", "Intensive Introductory Physics", 1.0],
    ],
];
?>


<section>
    <table class="table">
        <?php foreach ($courses as $semester => $semester_courses): ?>
        <thead>
            <tr><th colspan="3"><h4 class="ps-3"><br><?= htmlspecialchars($semester) ?></h4></th></tr>
            <tr>
                <th scope = "col">Course</th>
                <th scope = "col">Title</th>
                <th scope = "col">Credits</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($semester_courses as $course): ?>
                <tr>
                    <td><?= htmlspecialchars($course[0]) ?></td>
                    <td><?= htmlspecialchars($course[1]) ?></td>
                    <td><?= htmlspecialchars($course[2]) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
        <?php endforeach; ?>
    </table>
</section>
