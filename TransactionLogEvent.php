<?php


class TransactionLogEvent {
    
    private $EncryptionPassword,
        $EndDate,
        $ExportLocation,
        $FileFormat,
        $ProcessingComplete,
        $ProcessingStart,
        $ReportScheduleName,
        $ReportViewName,
        $StartDate,
        $Tag;

    public function processEvent($event) {


        $this->StartDate = $event->StartDate;
        $this->EndDate = $event->EndDate;
        $this->ProcessingStart = $event->ProcessingStart;
        $this->ProcessingComplete = $event->ProcessingComplete;
        $this->ReportScheduleName = $event->ReportScheduleName;
        $this->ReportViewName = $event->ReportViewName;
        $this->ExportLocation = $event->ExportLocation;
        $this->EncryptionPassword = $event->EncryptionPassword;
        $this->FileFormat = $event->FileFormat;
        $this->Tag = $event->Tag;

        $this->send();
    }

    public function fetchFile() {
        
    }

    public function send() {

        $data = json_encode(get_object_vars($this));
        
        $ch = curl_init('https://webhook.site/2e3e133f-182d-46ba-b7da-3f517e8c6795');
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_HEADER, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Content-Length: ' . strlen($data)));
        $result = curl_exec($ch);
    }
}


?>
