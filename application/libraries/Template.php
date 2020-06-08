<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Template {
		var $template_data = array();
		
		function set($name, $value)
		{
			$this->template_data[$name] = $value;
		}
	
		function load($template = '', $view = '' , $view_data = array(), $return = FALSE)
		{               
			$this->CI =& get_instance();
			$this->set('contents', $this->CI->load->view($view, $view_data, TRUE));			
			return $this->CI->load->view($template, $this->template_data, $return);
		}

		
		function link($data = ''){
			$b =  '
			<li>
				<i class="fa fa-home" aria-hidden="true"></i>
				<a href="#">
					Home
				</a>
			</li>
			';
			$sumber = explode(">",$data);
			$j = count($sumber);
			$i=0; foreach ($sumber as $k) {
				$i++;
				$active = ($i == $j) ? 'active' : '' ;
				$link = ($i != $j) ? '<a href="'.site_url(strtolower($k)).'">
					'.$k.'
				</a>' : $k ;
				$b .= '
				<li class="'.$active.'">
					'.$link.'
				</li>';
			}
	
			return $b;
			
		}
}

/* End of file Template.php */
/* Location: ./system/application/libraries/Template.php */