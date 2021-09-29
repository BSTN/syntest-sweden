# SenseTest — Swedish

_This version of the SenseTest is adjusted for a swedish audience, commissioned by Karolinska Institutet (Janina Neufeld)._

The test assesses grapheme-color synesthesia (color synesthesia for letters and/or digits). The letters of the alphabet (including the Swedish umlauts Ä, Å, Ä) and the digits 0-9 are presented three times in one out of four randomized orders, randomly assigned to each participant. The hexadecimal color codes are stored or alternatively if the participant presses the "no color" button this information is stored as well. The color codes can then be used to calculate the distance in color space between choices per item and from this the overall consistency score across items. A similar procedure has been used in previous online tasks such as the Synesthesia Battery (Reference: Eagleman, D. M., Kagan, A. D., Nelson, S. S., Sagaram, D., & Sarma, A. K. (2007). A standardized test battery for the study of synesthesia. Journal of neuroscience methods, 159(1), 139-145.).

### Requirements

The application can be installed on an Apache2 server running PHP7+ (with htaccess auth and mod_rewrite enabled) and MySQL. Installation requires [Bower](https://bower.io/) and makes use of [Parsedown](https://parsedown.org).

### Quick installation guide:

Run from the project root (make sure [Bower](https://bower.io/) is installed):
`bower install`

Edit _config.php_ to insert database information.

Create a **.htpasswd** and edit **/admin/.htaccess** to enable the password protected admin panel.

Make sure **index.html** and **/temp/\*.\*\*** are writeable by apache.

Access the admin panel and run from your browser:
https://yourserver.com/root/path/admin/
Make sure you "setup" (for database setup) and "Render" to make sure **index.html** is compiled.

Check if the *base()* function (in **api/functions.php**) is generating the right base url.

### Reference configuration files:

#### /data/global_config.json
- **title**: main html document title
- **description**: main html document description
- **keywords**: main html document keywords
- **image**: main html document image reference

#### /data/tests/*/config.json (in test folder)
- **ID**: Unique ID, used for table name and javascript reference
- **link**: link reference used for url (/tests/**link**, /results/**link**)
- **relation**: main | sub | @link
    - main: always visible in top list
    - sub: always visible in sub list
    - @link: only visible if referenced test is done. Reference to **link** parameter of other test. This is a comma seperated list, i.e.: kleurenalfabet, klankenvorm, klankenbetekenis
- **disabled**: true | false
- **type**: syn (colorgrid) | synplus (colorpicker)| klankenvorm | klankenbetekenis
- **titles**:
    - **menushort**: title of test (html)
    - **description**: description of test (html)
    - **time**: estimate duration of test (html)
- **percentage**: threshold for WOW-factor in results (integer 0-100)
- **resultinfo**: description on results page (html)
- **social**: description for social media link (must be url encoded)
- **wow**: description when greater then WOW threshold (html)
- **DB**: default DB fields (columnname: mysqlfieldtype)
- **everyquestion**: DB fields per question (columnname: mysqlfieldtype)
- **maxsetlength**: maximum questions
- **sets**:
    - "setname": [array]<Br>
    Set definitions

**warning**: do not repeat the same soundfile after one another in a synesthesia/music test set (/05. muziek/). The sound might not start playing the second time on some devices.

## File structure

- /admin/
- /api/
- /bower_components/
- /css/
- /data/
    - /images/ (all images and icons)
    - /pages/ (static Markdown pages)
    - /sound/ (default sounds)
    - /tests/
        - /1. kleurenalfabet/
            - /**config.json**
            - /icon.png
            - /icon-h.png
            - /**template.php**
        - /2. japans/
        - etc...
    - **/global_config.json**
    - **/profile.json**
- /js/
- /temp (_temporary files_)
- /templates/
    - /index.php
- /.htaccess
- /config.php
- /index.html (compiled via admin)

### Credits

The application is developed by [BSTN](http://www.bstn.nl) and originally commissioned by _het Groot Nationaal Onderzoek 2015 (Big National Research)_, a collaboration of [NTR](https://ntr.nl/), [Max Planck Institute for Psycholinguistics](https://www.mpi.nl), [Radboud University](https://www.ru.nl) and [Quest](https://quest.nl/). Please visit [http://gno.mpi.nl]() for more information.