<?php

$multyArray = array(

    array(

        'name' => 'Mirash',
        'fathername' => 'demo',
        'mothername' => 'dfsdfsd',
    ),

    array(

        'name' => 'Ovi',
        'fathername' => 'sdfsd',
        'mothername' => 'fsdfsd',
    ),

    array(

        'name' => 'Taz',
        'fathername' => 'dfsdf',
        'mothername' => 'dsfsdf',
    ),


    array(

        'name' => 'Taz',
        'fathername' => 'dfsdf',
        'mothername' => 'dsfsdf',
    ),
    array(

        'name' => 'Taz',
        'fathername' => 'dfsdf',
        'mothername' => 'dsfsdf',
    ),

    array(

        'name' => 'Taz',
        'fathername' => 'dfsdf',
        'mothername' => 'dsfsdf',
    ),

    array(

        'name' => 'Taz',
        'fathername' => 'dfsdf',
        'mothername' => 'dsfsdf',
    ),
    array(

        'name' => 'Taz',
        'fathername' => 'dfsdf',
        'mothername' => 'dsfsdf',
    ),

    array(

        'name' => 'Taz',
        'fathername' => 'dfsdf',
        'mothername' => 'dsfsdf',
    ),array(

        'name' => 'Taz',
        'fathername' => 'dfsdf',
        'mothername' => 'dsfsdf',
    ),
    array(

        'name' => 'Taz',
        'fathername' => 'dfsdf',
        'mothername' => 'dsfsdf',
    ),
    array(

        'name' => 'Taz',
        'fathername' => 'dfsdf',
        'mothername' => 'dsfsdf',
    ),

    

);



?>



<table>
    <tr>
        <th>Name</th>
        <th>Father</th>
        <th>Mother</th>
    </tr>

    <?php foreach($multyArray as $data): ?>

    <tr>
        <td><?= $data['name'] ?></td>
        <td><?= $data['fathername'] ?></td>
        <td><?= $data['mothername'] ?></td>
    </tr>

    <?php endforeach; ?>

</table>
