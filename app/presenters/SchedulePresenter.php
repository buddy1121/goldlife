<?php

namespace App\Presenters;

use Nette,
    Nette\Application\UI\Form;

class SchedulePresenter extends BasePresenter {

    /**
     * Returns an authorized API client.
     * @return Google_Client the authorized client object
     */
    

// Get the API client and construct the service object.
    public function renderShow() {
        $client = getGoogleClient();
        $service = new Google_Service_Calendar($client);

// Print the next 10 events on the user's calendar.
        $calendarId = 'primary';
        $optParams = array(
            'maxResults' => 10,
            'orderBy' => 'startTime',
            'singleEvents' => TRUE,
            'timeMin' => date('c'),
        );
        $results = $service->events->listEvents($calendarId, $optParams);

        if (count($results->getItems()) == 0) {
            print "No upcoming events found.\n";
        } else {
            print "Upcoming events:\n";
            foreach ($results->getItems() as $event) {
                $start = $event->start->dateTime;
                if (empty($start)) {
                    $start = $event->start->date;
                }
                printf("%s (%s)\n", $event->getSummary(), $start);
            }
        }
    }

}
