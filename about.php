<?php 

$pgName = 'About';
$pgClass = 'pg-about';

include './templates/header.php';

?>
    <section class="page-summary">

        <h1>About COMP 1950</h1>

        <nav>
            <ul>
                <li><a href="#course-outline">Course Outline</a></li>
                <li><a href="#pre-reqs">Prerequisites</a></li>
                <li><a href="#start-dates">Start Dates</a></li>
            </ul>
        </nav>

    </section>
    
    <section class="info">
        <article id="#course-outline" class="pre-requisites">
            <h1>Course Outline</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum numquam enim dolore ea soluta delectus voluptatum ipsam dolorem consectetur reiciendis nihil sint aliquid non quo dolor, ut quae vero atque?</p>
            <p>Iste sapiente repellendus amet repudiandae, vel minus unde libero temporibus aliquid voluptatem voluptates modi, dolorum ut a eius, eaque animi tenetur esse illo earum ipsum! Minima ad asperiores hic alias!</p>
            <p>Eum fugit quis ut adipisci numquam vero corporis culpa! Debitis blanditiis possimus quae earum accusamus sint velit eligendi corporis non vero molestias ab cupiditate incidunt vitae dolor, numquam doloremque officiis?</p>
        </article>
        <article id="#pre-reqs" class="pre-requisites">
            <h1>Pre-Requisites</h1>
            <ul>
                <li>Lorem</li>
                <li>Ipsum</li>
                <li>Dolor</li>
            </ul>
        </article>
        <article id="start-dates" class="more-info">
            <h1>Start Dates</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, minima neque. Sed, illum?</p>
            <ul>
                <li>April 08, 2018</li>
                <li>September 15, 2018</li>
            </ul>
        </article>
    </section>
<?php 

include './templates/footer.php';

?>