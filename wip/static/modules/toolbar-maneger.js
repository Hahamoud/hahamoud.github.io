class ToolbarManager {


    constructor(toolbarId, wrapperId, footerId) {
        this.navbar = document.getElementById(toolbarId)
        this.wrapper = document.getElementById(wrapperId)
        this.footer = document.getElementById(footerId)
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
        } else {
            this.navbar.classList.remove('raph-navbar-show');
            this.navbar.classList.add('raph-navbar-hide');
        }

        if (currentScrollPos > this.wrapper.scrollHeight - 100) {
            this.footer.classList.remove('raph-footer-hide');
            this.footer.classList.add('raph-footer-show');
        } else {
            this.footer.classList.remove('raph-footer-show');
            this.footer.classList.add('raph-footer-hide');
        }



        this.prevScrollpos = currentScrollPos;
    }

    getContentScrollAmount() {
        return this.wrapper.scrollTop
    }
}

export { ToolbarManager };