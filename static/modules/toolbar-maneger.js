class ToolbarManager {


    constructor(toolbarId, wrapperId, socialId) {
        this.navbar = document.getElementById(toolbarId)
        this.wrapper = document.getElementById(wrapperId)
        this.social = document.getElementById(socialId)
        this.prevScrollpos = this.getContentScrollAmount()
        this.activate = true
    }

    listen() {
        this.prevScrollpos = this.getContentScrollAmount()
        this.wrapper.onscroll = () => this.checkScrolling()
    }

    checkScrolling() {
        let currentScrollPos = this.getContentScrollAmount();
        //if (this.prevScrollpos > currentScrollPos) {
        if (50 > currentScrollPos) {
            this.navbar.classList.remove('raph-navbar-hide');
            this.navbar.classList.add('raph-navbar-show');
            this.social.classList.remove('social-hide');
            this.social.classList.add('social-show');
        } else {
            this.navbar.classList.remove('raph-navbar-show');
            this.navbar.classList.add('raph-navbar-hide');
            this.social.classList.remove('social-show');
            this.social.classList.add('social-hide');
        }
        this.prevScrollpos = currentScrollPos;
    }

    getContentScrollAmount() {
        return this.wrapper.scrollTop
    }
}

export { ToolbarManager };