# Norway Travel Agency

I took my [Norway Project](https://egyomrey.github.io/Norway-Travel/) and refactored the code to work with PHP and no frameworks.

[DIRECT LINK](https://norway-travel.000webhostapp.com)

## How to use this project

### Requirements

- [NodeJs](https://nodejs.org/en/) (to install dependencies used in the project)
- A web server to run PHP, in this case I used XAMPP
- Git

### Steps to run this project in your computer

1. **Clone** or **Download** this repository in your computer.
	- To clone, type in your console `git clone https://github.com/EGYOMREY/Travel-Agency-PHP.git`
	- To Download it directly, click Clone or download and then **Download ZIP**
		- If you choose to download the repository, change its name after you extract the file, so the name of the folder will be **Travel-Agency-PHP** instead of *Travel-Agency-PHP-master*

2. *(If you have a web server to run PHP, you can skip this step.)* [Download](https://www.apachefriends.org/index.html) XAMPP depending on your OS and install it.

3. Go to this `C:\xampp\htdocs` location in your `C` Drive and paste the downloaded/cloned project folder inside, so now you have something like this `C:\xampp\htdocs\Travel-Agency-PHP`

4. If you don't have XAMPP control panel open yet, you can execute this file to open it `C:\xampp\xampp-control.exe`

5. In XAMPP's **Control Panel** you should see **Apache** and **MySQL** in the Module column. Click **Start** in the **Actions column** next to them so you can start the servers. You can know if they are running if you read the status change in the Control Panel, it should say `[mysql] 	Status change detected: running
` and `[Apache] 	Status change detected: running
`. That means you can use them now.

6. *(This step is optional, it will install all the project's dependencies and use Gulp to open the project in the browser by command).* Open your console and dive into the projects folder exactly to this location `C:\xampp\htdocs\Travel-Agency-PHP` and type `npm install` so you can install all the dependencies I used to develop this project.

7. **If you did step 6**, you can open the project in your browser by: diving into the project's folder with your console, and type `gulp`. A new browser tab will open pointing to `http://localhost:3000/Travel-Agency-PHP/src/` which means that you are now in `index.php`. Enjoy the site!

8. **If you skipped step 6** you can open the project by typing `http://localhost/Travel-Agency-PHP/src/` in your browser. Enjoy the site!


# Technologies used

- Gulp for task automation: convert scss to CSS, and refresh the browser for changes in my files.
- PHP
- SCSS (Basic 7-1 Pattern)
- Pictures were obtained from [Pexels.com](https://www.pexels.com/), [Unsplash.com](https://unsplash.com/) and [Pixabay.com](https://pixabay.com/en/).


## Project Structure

<pre>
src/  
|  
|– css/  
|  
|– images/   
|  
|– inc/  
|   |– arrays.php
|   |– footer.php
|   |– header.php
|   |– navigation.php        
|  
|– scss/    
|   
|– about.php
|– contact.php
|– hotels.php
|– index.php
|– planning.php
|– restaurants.php
|  
– gulpfile.js  
– package.json          
 </pre>


### 1. Styling

- Done with Sassy CSS (SCSS)
- Followed a basic [7-1 Pattern](https://sass-guidelin.es/#the-7-1-pattern)

**Final Sass folder structure:**
 <pre>
sass/  
|  
|– abstracts/  
|   |– _variables.scss 
|   |– _mixins.scss
|  
|– base/  
|   |– _base.scss  
|   |– _typography.scss  
|  
|– components/  
|   |– _buttons.scss
|   |– _hotel-info.scss
|   |– _navigation.scss
|   |– _newsletter.scss
|   |– _offers.scss
|   |– _plan-tip.scss
|   |– _restaurant.scss
|   |– _tourism-agent-group.scss
|  
|– layout/         
|   |– _header.scss       
|   |– _footer.scss           
|   |– _grid.scss     
|  
|– pages/  
|   |– _about.scss
|   |– _contact.scss
|   |– _home.scss
|   |– _hotels.scss
|   |– _planning.scss
|   |– _restaurants.scss
|     
|– vendors/  
|   |– _normalize.scss   
|  
– main.scss           
 </pre>


### 3. Svg icons

Took the social svg from this repository: 
[Font-Awesome-SVG-PNG](https://github.com/encharm/Font-Awesome-SVG-PNG)

### 4. Color Palette

Thanks to [canva.com](https://www.canva.com/color-palette/) for the color palette which was taken from the picture that's in the header.
