<?php
/**
 * @author @potfur <wachowski.michal@gmail.com>
 * @created 26.02.15, 22:57
 */
namespace Fabfuel\Prophiler\DataCollector;

use Fabfuel\Prophiler\DataCollectorInterface;

class Configuration  implements DataCollectorInterface
{
  protected $icon;
  protected $data = [];

  public function __construct($data)
  {
    $this->data = $data;
  }
  /**
   * Get the title of this data collector
   *
   * @return string
   */
  public function getTitle()
  {
    return 'Configuration';
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
    return '<i class="fa fa-cogs"></i>';
  }

    /**
     * Get data from the data collector
     *
     * @return array
     */
    public function getData()
    {

      foreach ($this->data as $config_item=>$items) {

        foreach ($items as $key=>$value) {
          $return[$config_item][$key] = $value;
        }
      }
      return $return;
    }

}
