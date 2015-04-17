<?php
/**
 * @author @fabfuel <fabian@fabfuel.de>
 * @created 19.11.14, 07:03 
 */
namespace Fabfuel\Prophiler\DataCollector;

use Fabfuel\Prophiler\DataCollectorInterface;

class Post implements DataCollectorInterface
{
    /**
     * Get the title of this data collector
     *
     * @return string
     */
    public function getTitle()
    {
      if(count($this->getData()['POST'])){
        return '<b>Post ('.count($this->getData()['POST']).')</b>';
      }else{
        return 'Post';
      }
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
        return '<i class="fa fa-file-text-o"></i>';
    }

    /**
     * Get data from the data collector
     *
     * @return array
     */
    public function getData()
    {
        $data = [
            'POST' => $_POST,
        ];
        return $data;
    }
}
