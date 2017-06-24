# HTML5UP - Phantom for Wordpress
Wordpress version of HTML5UP Phantom template


## Components
- Contact Form
- Social Media Links
- Sidebar Navigation
- Featured Images
- 3-Column Grid (Homepage)
- Full-width (Single Page or Post)
- Customizer Settings Support

## Plugins

### Contact Form 7
I encourage using this for the footer contact form

#### Integration with Contact Form 7
- Install Contact Form 7 Plugin
- Create a new form and add the ff. contact template
```html
<div class="field half first">
  [text* fullname id:fullname placeholder "Full Name"]
</div>
<div class="field half">
  [email* email id:email placeholder "Email"]
</div>
<div class="field">
  <div class="textarea-wrapper">
    [textarea* message id:message class:footer-textarea placeholder "Message"]
  </div>
</div>
<ul class="actions">
  <li>[submit class:special "Send Message"]</li>
</ul>
```
- Copy the SHORTCODE then go to Appearance > Widgets
- Add Text Widget and paste the Contact Form 7 shortcode
- Save changes

## Screenshot
![Phantom][screenshot]

[screenshot]: https://github.com/faurelia/wordpress-phantom-html5up/blob/master/screenshot.png "Phantom for WordPress"

## Credits
This theme was created by [HTML5 Up](https://html5up.net/phantom) and adapted for WordPress by [Fatima Aurelia](https://github.com/faurelia).

## Status
This theme is still under alpha phase. If you find any bugs, please contact me at my [email address](horroh.ne@gmail.com).

