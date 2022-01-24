<?php 

$pay_student = [



    [

        'Name' => 'Kouzbour',
        'Payment_Shedule' => 'Kouzbour',
        'Bill_Number' => '123456',
        'Amount_Paid' => 'DHS 1000,000',
        'Balance_Amount' => 'DHS 5000,000',
        'Date' => '15/01/2022',

    ],
    [

        'Name' => 'Kouzbour',
        'Payment_Shedule' => 'Kouzbour',
        'Bill_Number' => '123456',
        'Amount_Paid' => 'DHS 1000,000',
        'Balance_Amount' => 'DHS 5000,000',
        'Date' => '15/01/2022',

    ],
    [

        'Name' => 'Kouzbour',
        'Payment_Shedule' => 'Kouzbour',
        'Bill_Number' => '123456',
        'Amount_Paid' => 'DHS 1000,000',
        'Balance_Amount' => 'DHS 5000,000',
        'Date' => '15/01/2022',

    ],
    [

        'Name' => 'Kouzbour',
        'Payment_Shedule' => 'Kouzbour',
        'Bill_Number' => '123456',
        'Amount_Paid' => 'DHS 1000,000',
        'Balance_Amount' => 'DHS 5000,000',
        'Date' => '15/01/2022',
    ]
    ];

    foreach ($pay_student as $tabpay){

            echo '<tr>
            <td>'.$tabpay['Name'].'</td>
            <td>'.$tabpay['Payment_Shedule'].'</td>
            <td>'.$tabpay['Bill_Number'].'</td>
            <td>'.$tabpay['Amount_Paid'].'</td>
            <td>'.$tabpay['Balance_Amount'].'</td>
            <td>'.$tabpay['Date'].'</td>
            <td><i class="far fa-eye text-primary"></i></td>
        </tr>';


    }
    ?>