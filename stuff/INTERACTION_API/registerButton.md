\WU_API::registerButton( $position, $buttonClass )
===

Registers a plugin button in the specified position.

Parameters:

`$position` - sets the position, where button should be drawn. Currently we support only `header` as a position value.

`$buttonClass` - class, which is responsible for the button behaviour. Can contain 3 methods:

 * `getImage` - button image (should return url of the image source)
 * `getTitle` - button title
 * `clickAction` - function which will be executed when button will be clicked.

 Example:

 ```
    <?php

    ////
    // this code was added to People/Profile Notes page
    ////

    class button1Class
    {
        protected $_buttonImage = 'http://c.dryicons.com/images/icon_sets/colorful_stickers_part_5_icons_set/png/32x32/sms.png';
        protected $_buttonTitle = 'Send SMS';

        public function getImage()
        {
            return $this->_buttonImage;
        }

        public function getTitle()
        {
            return $this->_buttonTitle;
        }

        public function clickAction()
        {
            \WU_API::showAlert('Hello World!');
        }
    }

    \WU_API::registerButton( 'header', 'button1Class' );
 ```