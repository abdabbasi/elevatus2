const application = Stimulus.Application.start();
window.__forceSmoothScrollPolyfill__ = true;

// Main Menu Controller
class MainMenu extends Stimulus.Controller {
    toggle(event) {
        const header = document.querySelector('#masthead');
        header.classList.toggle('show-menu');
    }
}
application.register("mainMenu", MainMenu)

// Scroll to Top Controller
class scrollTop extends Stimulus.Controller {
    backToTop() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
}
application.register("scrollTop", scrollTop)

// Accordion Controller
class accordion extends Stimulus.Controller {
    toggle(e) {
        const allAccordions = document.querySelectorAll('.accordion-container')
        if(e.target.closest('.accordion-container').classList.contains('active')){
            e.target.closest('.accordion-container').classList.remove('active')
        }else {
            allAccordions.forEach(el => {
                el.classList.remove('active')
            });
            e.target.closest('.accordion-container').classList.add('active')
        }
    }
}
application.register("accordion", accordion)

// Tabs Controller
class tabs extends Stimulus.Controller {
    connect() {
        let allTabsSections = document.querySelectorAll('.tabs-sec')
        allTabsSections.forEach(el => {
            el.querySelector('.tabs .tab[id="tab-1"]').classList.add('active')
            el.querySelector('.tabs-wrapper .tabs-container[data-id="tab-1"]').classList.add('active')
        });
    }

    open(e) {
        let allTabsSection = e.target.closest('.tabs-sec')
        const allTabs = allTabsSection.querySelectorAll('.tabs .tab')
        const allTabsContainer = allTabsSection.querySelectorAll('.tabs-wrapper .tabs-container')
        const tabID = e.target.id

        allTabs.forEach(el => {
            el.classList.remove('active')
        });
        allTabsContainer.forEach(el => {
            el.classList.remove('active')
        });
        
        e.target.classList.add('active')
        allTabsSection.querySelector(`.tabs-wrapper .tabs-container[data-id="${tabID}"]`).classList.add('active')
    }
}
application.register("tabs", tabs)

// Add Side Menu to Single Blog Controller
class sidemenu extends Stimulus.Controller {
    connect(e) {
        var allHeadings3 = document.querySelectorAll('.has-side-menu .content-side h3')
        var sideMenu = document.querySelector('.has-side-menu .side-menu')
        if (allHeadings3.length != 0){
            sideMenu.style.display = 'block'
            allHeadings3.forEach(el => {
                el.setAttribute('id', el.textContent.replace(/ /g,"_"))
                var tag = document.createElement("a");
                var text = document.createTextNode(el.textContent);
                tag.appendChild(text);
                tag.href = '#' +el.textContent.replace(/ /g,"_");
                sideMenu.appendChild(tag);
            });
        }
    }
}
application.register("sidemenu", sidemenu)

// Mega Menu Function
let windowWidth = window.innerWidth;
if (windowWidth > 768) {
    document.querySelector('.has-mega-menu').addEventListener("mouseover", function(e){
        e.stopPropagation();
        // e.target.closest('.has-mega-menu').classList.toggle('current-menu-item')
        document.querySelector('.mega-menu').classList.add('active')
    })
    document.querySelector('.menu-item:not(.has-mega-menu)').addEventListener("mouseover", function(e){
        document.querySelector('.mega-menu').classList.remove('active')
    })

    document.querySelector('.mega-menu').addEventListener("mouseover", function(e){
        e.stopPropagation()
    })
    document.querySelector('header').addEventListener("mouseover", function(e){
        e.stopPropagation()
    })
    document.querySelector('html').addEventListener("mouseover", function(e){
        document.querySelector('.mega-menu').classList.remove('active')
        document.querySelector('.has-mega-menu').classList.remove('current-menu-item')
        document.querySelector('#masthead').classList.remove('sticky')
    })
}else {
    document.querySelector('.has-mega-menu').addEventListener("click", function(e){
        e.stopPropagation();
        e.target.closest('.has-mega-menu').classList.toggle('current-menu-item')
        document.querySelector('.mega-menu').classList.toggle('active')
    })
    document.querySelector('.mega-menu').addEventListener("click", function(e){
        e.stopPropagation()
    })
    document.querySelector('html').addEventListener("click", function(e){
        document.querySelector('.mega-menu').classList.remove('active')
        document.querySelector('.has-mega-menu').classList.remove('current-menu-item')
        document.querySelector('#masthead').classList.remove('sticky')
    })
}
