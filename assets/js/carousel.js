class Carousel {


    /**
     * 
     * @callback moveCallback 
     * @param {number} index
     */

    /**
     * 
     * @param {HTMLElements} element 
     * @param {Object} options 
     * @param {Object} [options.slidesToScroll = 1] Nombre d'elements à faire défiler
     * @param {Object} [options.slidesVisible = 1] Nombre d'elements visible
     * @param {boolean} [options.loop = false] doit-t-on boucler en fin de carousel
     */
    constructor(element, options = {}) {
        this.element = element
        this.options = Object.assign({}, {
            slidesToScroll: 1,
            slidesVisible: 1,
            loop: false
        }, options)
        let children = [].slice.call(element.children)
        this.isMobile = false
        this.currentItem = 0
        this.moveCallbacks = []

        // Modifiacations du DOM
        this.root = this.createDivWidthClass('carousel')
        this.container = this.createDivWidthClass('carousel__container')
        this.root.setAttribute('tabindex', '0')
        this.root.appendChild(this.container)
        this.element.appendChild(this.root)
        this.items = children.map((child) => {
            let item = this.createDivWidthClass('carousel__item')
            item.appendChild(child)
            this.container.appendChild(item)
            return item
        });
        this.setStyle()
        this.createNavigation()

        // Evenements
        this.moveCallbacks.forEach(cb => cb(0))
        this.onWindowResize()
        window.addEventListener('resize', this.onWindowResize.bind(this))
        this.root.addEventListener('keyup', e => {
            if (e.key === 'ArrowRight' || 'Right') {
                this.next()
            } else if (e.key === 'ArrowLeft' || 'Left') {
                this.next()
            }
        })
    }
    /**
     *  Applique les bonnes dimensions aux élements du caroussel
     */
    setStyle() {
        let ratio = this.items.length / this.slidesVisible
        this.container.style.width = (ratio * 100) + "%"
        this.items.forEach(item => { item.style.width = ((100 / this.slidesVisible) / ratio) + "%" });
    }

    createNavigation() {
        let nextButton = this.createDivWidthClass('carousel__next')
        let prevButton = this.createDivWidthClass('carousel__prev')
        this.root.appendChild(nextButton)
        this.root.appendChild(prevButton)
        nextButton.addEventListener('click', this.next.bind(this))
        prevButton.addEventListener('click', this.prev.bind(this))
        if (this.options.loop === true) {
            return
        }
        this.onMove(index => {
            if (index === 0) {
                prevButton.classList.add('carousel__prev--hidden')
            } else {
                prevButton.classList.remove('carousel__prev--hidden')
            }

            if (this.items[this.currentItem + this.slidesVisible] === undefined) {
                nextButton.classList.add('carousel__next--hidden')
            } else {
                nextButton.classList.remove('carousel__next--hidden')
            }
        })
    }

    next() {
        this.gotoItem(this.currentItem + this.slidesToScroll)
    }

    prev() {
        this.gotoItem(this.currentItem - this.slidesToScroll)
    }
    /**
     * deplace le carousel vers l'élement ciblé
     * @param {number} index 
     * @returns 
     */

    gotoItem(index) {
        if (index < 0) {
            if (this.options.loop) {
                index = this.items.length - this.slidesVisible
            } else {
                return
            }
        } else if (index >= this.items.length || this.items[this.currentItem + this.slidesVisible] === undefined && index > this.currentItem) {
            index = 0
        }
        let translateX = index * -100 / this.items.length
        this.container.style.transform = 'translate3d( ' + translateX + '%, 0, 0)'
        this.currentItem = index
        this.moveCallbacks.forEach(cb => cb(index))
    }

    /**
     * 
     * @param {moveCallback} 
     */

    onMove(cb) {
        this.moveCallbacks.push(cb)
    }

    onWindowResize() {
        let mobile = window.innerWidth < 800
        if (mobile !== this.isMobile) {
            this.isMobile = mobile
            this.setStyle()
            this.moveCallbacks.forEach(cb => cb(this.currentItem))
        }
    }



    /**
     * 
     * @param {string} className 
     * @returns {HTMLElement}
     */
    createDivWidthClass(className) {
        let div = document.createElement('div')
        div.setAttribute('class', className)
        return div
    }

    /**
     * @returns (number)
    */

    get slidesToScroll() {
        return this.isMobile ? 1 : this.options.slidesToScroll
    }

    /**
    * @returns (number)
    */

    get slidesVisible() {
        return this.isMobile ? 1 : this.options.slidesVisible
    }
}

document.addEventListener('DOMcontentLoaded', function () {

})

new Carousel(document.querySelector('#carousel1'), {
    slidesVisible: 2,
    slidesToScroll: 2,
    loop: false
});



new Carousel(document.querySelector('#carousel2'), {
    slidesVisible: 2,
    slidesToScroll: 2,
    loop: false
});

