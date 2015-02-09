<?php
    require("pagarme-php/Pagarme.php");

    Pagarme::setApiKey("ak_test_hEYORHTe5HC4emKnXb48mqqCG5PtUd");

    $transaction = new PagarMe_Transaction(array(
        "amount" => 1000,
        "card_hash" => "{CARD_HASH}",
        "customer" => array(
            "name" => "John Appleseed",
            "document_number" => "11111111111",
            "email" => "jappleseed@apple.com",
            "address" => array(
                "street" => "Av. Brigadeiro Faria Lima",
                "neighborhood" => "Jardim Paulistano",
                "zipcode" => "01452000",
                "street_number" => "2941",
                "complementary" => "8º andar"
            ),
            "phone" => array(
                "ddd" => "11",
                "number" => "30713261"
            )
        )
    ));

    $transaction->charge();

    $status = $transaction->status; // status da transação
?>