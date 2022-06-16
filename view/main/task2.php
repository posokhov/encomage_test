<nav class="navbar navbar-expand-lg bg-dark .navbar-dark">
    <div class="container-fluid mb-8">

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link " href="/">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="task1">TASK 1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="task3">TASK 3</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<?php

$deliveryMethodsArray = [
    [
        'code' => 'dhl',
        'customer_costs' => [
            22 => '1.000',
            11 => '3.000',
        ]
    ],
    [
        'code' => 'fedex',
        'customer_costs' => [
            22 => '4.000',
            11 => '6.000',
        ]
    ]
];
function sortDeliveryMethod(array $deliveryMethodsArray)
{
    $arr = [];
    foreach ($deliveryMethodsArray as $delivery => $item) {
        foreach ($item as $value => $u) {
        }
        $arr['22'][$item['code']] = $item['customer_costs']['22'];
        $arr['11'][$item['code']] = $item['customer_costs']['11'];


    }
    foreach ($item as $value => $u) {
        $arr['22'][$item['code']] = $item['customer_costs']['22'];
        $arr['11'][$item['code']] = $item['customer_costs']['11'];
    }

    return $arr;

}

$result = sortDeliveryMethod($deliveryMethodsArray);
