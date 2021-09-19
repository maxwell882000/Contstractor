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
        if (this.currentId !== this.getUniqueId($(obj))) {
            this.selectedObj.removeClass("active");

            let last = this.currentId;
            this.selectedObj = $(obj);
            let current = this.getUniqueId(this.selectedObj);

            if ((current === (this.firstId + 2)) && last === this.firstId && last < current) {
                this.previousId = current - 1;
            } else if ((current === (this.lastId - 2)) && last === this.lastId && last > current) {
                this.previousId = current + 1;
            } else {
                this.previousId = last;
            }

            this.currentId = current;

        }
        console.log("After")
        console.log("PE" + this.previousId);
        console.log("Cu" + this.currentId);

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

    deleteFirst() {
        return this.previousId === this.firstId ||
            this.previousId === this.firstId + 1;
    }

    deleteFourthFromEnd() {
        return this.currentId === this.lastId - 1;
    }

    goDown() {
        const upDeleteIndex = this.deleteFirst() ? this.firstId : this.deleteFourthFromEnd() ? this.currentId - 2 : this.currentId - 1;
        $(this.allBtn[upDeleteIndex]).addClass("remove-circle");
        $(this.allBtn[this.currentId + 1]).removeClass("remove-circle").addClass("transition-show");
    }

    deleteLast() {
        return this.previousId === this.lastId ||
            this.previousId === this.lastId - 1;
    }

    deleteFourth() {
        return this.currentId === this.firstId + 1;
    }

    goUp() {
        const downDeleteIndex = this.deleteLast() ? this.lastId : this.deleteFourth() ? this.currentId + 2 : this.currentId + 1;
        $(this.allBtn[downDeleteIndex]).addClass("remove-circle");
        $(this.allBtn[this.currentId - 1]).removeClass("remove-circle").addClass("transition-show");
    }

    isGoingUp() {
        return this.lastId - 1 !== this.currentId
            && this.currentId < this.previousId;
    }

    isGoingDown() {
        return this.firstId + 1 !== this.currentId
            && this.currentId > this.previousId;
    }

    checkNecessityGoUpOrDown() {
        if (this.isGoingUp()) {
            this.goUp();
        } else if (this.isGoingDown()) {
            this.goDown();
        }
    }

    actionOnClick() {

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
} catch (e) {

}

