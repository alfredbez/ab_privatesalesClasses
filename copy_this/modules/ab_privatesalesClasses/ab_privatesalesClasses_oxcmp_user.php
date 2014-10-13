<?php

class ab_privatesalesClasses_oxcmp_user extends ab_privatesalesClasses_oxcmp_user_parent {

     /**
     * View classes accessible for not logged in customers
     *
     * @var array
     */
    protected $_aAllowedClasses = array(
                                        'register',
                                        'forgotpwd',
                                        'content',
                                        'account',
                                        'clearcookies',
                                        'oxwServiceMenu',
                                         );
}