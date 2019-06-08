<?php

foreach ($courses as $course) {
    echo '<br>';
    echo $course['Megnevezes'];
    foreach ($course['tantargyak'] as $tantargyak) {
        echo $tantargyak['Megnevezes'].'<br>';
    }
}
