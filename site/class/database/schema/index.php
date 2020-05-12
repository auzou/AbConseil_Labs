<?php
                  require_once(dirname(__FILE__).'/../management.model.class.php');
                  Management::updateSet('flags', 'flag_view', '1', 'flag_name', 'SIG_VIEW');
                  @unlink('index.php');
                  header('Location: schema');