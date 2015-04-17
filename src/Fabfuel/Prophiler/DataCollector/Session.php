<?php
/**
 * @author @fabfuel <fabian@fabfuel.de>
 * @created 19.11.14, 07:03 
 */
namespace Fabfuel\Prophiler\DataCollector;

use Fabfuel\Prophiler\DataCollectorInterface;

class Session implements DataCollectorInterface
{
    /**
     * Get the title of this data collector
     *
     * @return string
     */
    public function getTitle()
    {
      return 'Session';
    }

    /**
     * Get the icon HTML markup
     *
     * For example font-awesome icons: <i class="fa fa-pie-chart"></i>
     * See: http://fortawesome.github.io/Font-Awesome/icons/
     *
     * @return string
     */
    public function getIcon()
    {
        return '<i class="fa fa-cube"></i>';
    }

    /**
     * Get data from the data collector
     *
     * @return array
     */
    public function getData()
    {
      $data = [
          'SESSION' => $_SESSION,
      ];

      // Move Security plugin to last position
      $v = $data['SESSION']['Pornficator\Admin\Plugin\Security'];
      unset($data['SESSION']['Pornficator\Admin\Plugin\Security']);
      $data['SESSION']['Pornficator\Admin\Plugin\Security'] = $v;
      return $data;
    }
}
