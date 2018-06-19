<?php

/***********************************************************************************************************************
*    _ (`-. ('-. .-.  ('-.        .-') _ .-') _     ('-.     .-')  _   .-')              ('-.   .-. .-')
*  ( (OO  ( OO )  / ( OO ).-.   ( OO ) (  OO) )   ( OO ).-.( OO )( '.( OO )_           ( OO ).-\  ( OO )
*  _.`     ,--. ,--. / . --. ,--./ ,--,'/     '._  / . --. (_)---\_,--.   ,--.,--.      / . --. /;-----.\
* (__...--'|  | |  | | \-.  \|   \ |  |\|'--...__) | \-.  \/    _ ||   `.'   ||  |.-')  | \-.  \ | .-.  |
* |  /  | |   .|  .-'-'  |  |    \|  | '--.  .--.-'-'  |  \  :` `.|         ||  | OO .-'-'  |  || '-' /_)
* |  |_.' |       |\| |_.'  |  .     |/   |  |   \| |_.'  |'..`''.|  |'.'|  ||  |`-' |\| |_.'  || .-. `.
* |  .___.|  .-.  | |  .-.  |  |\    |    |  |    |  .-.  .-._)   |  |   |  (|  '---.' |  .-.  || |  \  |
* |  |    |  | |  | |  | |  |  | \   |    |  |    |  | |  \       |  |   |  ||      |  |  | |  || '--'  /
* `--'    `--' `--' `--' `--`--'  `--'    `--'    `--' `--'`-----'`--'   `--'`------'  `--' `--'`------'
************************************************************************************************************************
 * @author @Hax0lirb
 * @improvements Hax0rlib implement POO <3
 * @version 2.0
 * @since 16/07/2017
 * @contact Telegram @hax0rlib @phantasmlab
 *************************/

class Resolver {

    public function infoAccount() {

        $skypeAccount = 'SKYPE ACCOUNT'; // SEU ID DE LOGIN NO SKYPE
        $key = 'YOUR_API_KEY'; // SUA CHAVE DA API
        $url = 'http://api.skresolver.com/?format=json&apikey=$key&user=$skypeAccount' // PARA MULTIPLAS CONTAS ADD: &multiple=1
	}

    public function sessioncURL() {

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, infoAccount()->$url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 20);
        $result = curl_exec($ch);
        curl_close($ch);
        $result = json_decode($result);
        $statusCode = $result->meta->statusCode;
        $data = $result->data;
        $user = $result->data->user;
        $ip = $result->data->ip;
        $port = $result->data->port;
        $country = $result->data->country;
        $avatarURL = $result->data->avatarURL;
    }

}

    public function printData() {

        if(isset($data))
        {
            echo "User: sessioncURL()->user <br />";
            echo "IP: sessioncURL()->ip <br />";
            echo "Port: sessioncURL()->port <br />";
            echo "Country: sessioncURL()->country <br />";
            echo "avatar: sessioncURL()->avatarURL";
        }
        else
            echo "No IP address has been found";
    }
    else
    {
        echo "Service unavailable";
    }
}


/**********************************
 *  MODO DE USAR
 *  BY HAX0RLIB
 *  EX:
 * $resolver = new Resolver();
 * $resolver->printData();
 **********************************/

