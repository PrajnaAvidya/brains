<?
$db = new PDO('mysql:host=localhost;dbname=bitcoin','root','root');

if (($handle = fopen("addresses.csv", "r")) !== FALSE) {
    $count = 0;
    $limit = 200;
    $addresses_array = array();
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {

        $count++;
        $addresses_array[] = $data[1];

        if ($count == $limit)
        {
            $addresses_text = implode('|', $addresses_array);
            $balance_url = 'http://blockchain.info/q/addressbalance/'.$addresses_text;
            echo $balance_url."<br />";
            $balance = file_get_contents($balance_url);
            var_dump($balance);
            if (is_numeric($balance) && $balance == (int)$balance)
            {
                if ($balance > 0)
                {
                    echo "BALANCE FOUND: $balance<br />";
                    die(var_dump($addresses_array));
                }
            }

            $count = 0;
            $addresses_array = array();
        }
        else
            continue;
    }
    fclose($handle);
}
$addresses_text = implode('|', $addresses_array);
$balance_url = 'http://blockchain.info/q/addressbalance/'.$addresses_text;
echo $balance_url."<br />";
$balance = file_get_contents($balance_url);
var_dump($balance);
die();
