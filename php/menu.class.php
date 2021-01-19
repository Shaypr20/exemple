<?php

class menu extends bd
{
	private $url;
	private $child;
	private $link = [];

	public function getURL()
	{
		$this->url = explode("/", $_SERVER['REDIRECT_URL']);
		$this->url = array_filter($this->url);
		$this->url = array_values($this->url);
	}

	public function getMenu($url = "", $menu_type = null)
	{
		$this->getURL();
		$menu = $this->createMenu($url, $menu_type);

		return $menu;
	}

	private function getData($glav = "", $menu_type = null)
	{
		$only_men = $menu_type ? " AND menu_type = '".$menu_type."'" : "";
		$data = $this->select(
			"page",
			"url, title_menu as tit",
			"glav = '" . $glav . "' AND active = 1" . $only_men,
			"ORDER BY sort"
		);

		return $data;
	}

	public function getChild($url, $menu_type = null)
	{
		$urls = $this->getData($url, $menu_type = null);
		return $urls;
	}

	private function createMenu($urls = "", $menu_type = null)
	{
		$menu = "";
		$data = $this->getData($urls, $menu_type);

		if (!empty($data)) {
			foreach ($data as $val) {
				$dr = "";
				
				$this->link[] = $val['url'];
				$link = implode("/", $this->link);

				if ($this->getData($val['url'], $menu_type)) {
					$ul = $this->createMenu($val['url'], $menu_type);
				}

				if ($link && $val['tit']) {
					$s = (in_array($val['url'], $this->url)) ? "active" : "";
					$menu .=
						"<li class='" . $s . "'>"
						. "<a href='/" . $link . "/'><span>" . $val['tit'] . "</span></a>"
						. $ul
						. "</li>";
				}

				unset($ul);
				array_pop($this->link);
			}
			
			$menu = "<ul>" . $menu . "</ul>";

			return $menu;
		}
	}
}