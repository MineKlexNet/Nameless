<?php
/*
 *	Made by Samerton
 *  https://github.com/NamelessMC/Nameless/
 *  NamelessMC version 2.0.0-pr8
 *
 *  License: MIT
 *
 *  Recent users dashboard collection item
 */

class RecentUsersItem extends CollectionItemBase {

    private Smarty $_smarty;
    private Language $_language;

    public function __construct(Smarty $smarty, Language $language, Cache $cache) {
        $cache->setCache('dashboard_stats_collection');
        if ($cache->isCached('recent_users')) {
            $from_cache = $cache->retrieve('recent_users');
            $order = $from_cache['order'] ?? 2;

            $enabled = $from_cache['enabled'] ?? 1;
        } else {
            $order = 2;
            $enabled = 1;
        }

        parent::__construct($order, $enabled);

        $this->_smarty = $smarty;
        $this->_language = $language;
    }

    public function getContent(): string {
        // Get the number of recent users
        $queries = new Queries();
        $users_query = $queries->getWhere('users', ['joined', '>', strtotime('7 days ago')]);

        $this->_smarty->assign([
            'ICON' => $this->_language->get('admin', 'recent_users_statistic_icon'),
            'TITLE' => $this->_language->get('admin', 'recent_users'),
            'VALUE' => count($users_query)
        ]);

        return $this->_smarty->fetch('collections/dashboard_stats/recent_users.tpl');
    }
}
