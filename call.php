private function randStr($l) {
    $data = "abcdefghijklmnopqrstuvwxyz1234567890";
    $word = "";
    for ($a = 0; $a < $l; $a++) {
        // التعديل هنا: استخدمنا [ ] بدل { } عشان يشتغل على PHP 8
        $word .= $data[rand(0, strlen($data) - 1)];
    }
    return $word;
}

public function run() {
    while (true) {
        echo "? Loop (y/n) : ";
        $loop = trim($this->get()); // أضفت trim عشان لو فيه مسافات زيادة
        
        if ($loop == "y" || $loop == "n") {
            break;
        } else {
            echo "Jika ya jawab y jika tidak jawab n\n";
            continue;
        }
    }

    if ($loop == "y") {
        echo "? Many : ";
        $many = trim($this->get());
        $this->loop($many);
    } else {
        $this->ekse();
    }
}
