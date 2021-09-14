
class Pagination {
    selectedObj;
    previousId;
    allBtn;
    lastId;
    firstId;
    currentId;

    constructor(allObj) {
        this.allBtn = $(allObj);
        this.selectedObj = $(this.allBtn[0]);
        this.firstId = 0;
        this.lastId = this.getUniqueId(this.allBtn.last());
        this.previousId = this.firstId;
        this.currentId = this.firstId;
    }

    getUniqueId(obj) {
        return parseInt(obj.attr("unique_id"))
    }

    setNewClick(obj) {
        if (this.previousId !== this.getUniqueId($(obj))) {
            console.log("CHANGED");
            this.selectedObj.removeClass("active");
            this.previousId = this.currentId;
            this.selectedObj = $(obj);
            this.currentId = this.getUniqueId(this.selectedObj);
        }
    }

    isClickable() {
        const paginator = this;

        function currentObjectIsSelected() {
            return paginator.selectedObj.hasClass("active");
        }

        function isLastObjectSelected() {
            return paginator.lastId === paginator.currentId;
        }

        function isFirstObjectSelected() {
            return paginator.firstId === paginator.currentId;
        }

        function isSecondObjectIsSelectedAndGoesDown() {
            return (paginator.firstId + 1 === paginator.currentId && paginator.previousId < paginator.currentId)
        }

        function isBeforeLastObjectIsSelectedAndGoesUp() {
            return (paginator.lastId - 1 === paginator.currentId && paginator.previousId > paginator.currentId);
        }
        return !(currentObjectIsSelected()
            || isLastObjectSelected()
            || isFirstObjectSelected()
            || isSecondObjectIsSelectedAndGoesDown()
            || isBeforeLastObjectIsSelectedAndGoesUp());
    }

    goDown() {
        const upDeleteIndex = this.previousId === this.firstId ||
        this.previousId === this.firstId + 1 ? this.firstId : this.currentId - 1;
        $(this.allBtn[upDeleteIndex]).addClass("remove-circle");
        $(this.allBtn[this.currentId + 1]).removeClass("remove-circle").addClass("transition-show");
    }

    goUp() {
        const downDeleteIndex = this.previousId === this.lastId ||
        this.previousId === this.lastId - 1 ? this.lastId : this.currentId + 1;
        $(this.allBtn[downDeleteIndex]).addClass("remove-circle");
        $(this.allBtn[this.currentId - 1]).removeClass("remove-circle").addClass("transition-show");
    }

    checkNecessityGoUpOrDown() {
        if (this.lastId - 1 !== this.currentId
            && this.currentId < this.previousId) {
            this.goUp();
        } else if (this.firstId + 1 !== this.currentId
            && this.currentId > this.previousId) {
            this.goDown();
        }
    }

    actionOnClick() {
        console.log(this.firstId);
        console.log(this.currentId);
        if (this.isClickable()) {
            this.allBtn.addClass("transition-hide");
            setTimeout(() => {
                this.allBtn.removeClass("transition-hide");
                this.allBtn.addClass("transition-show");
                this.checkNecessityGoUpOrDown();
                this.selectedObj.addClass("active")
            }, 300);
        }
    }

    paginationStart() {
        const paginator = this;
        this.allBtn.click(
            function () {
                paginator.setNewClick(this);
                paginator.actionOnClick();
            }
        )
    }
}
try {
    const paginate = new Pagination(".pagination-start")
    paginate.paginationStart();
}
catch (e) {

}

