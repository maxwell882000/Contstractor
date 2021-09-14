class Pagination_with_controller extends Pagination {

    getLeftId() {
        let previous = pagination.currentId - 1;
        if (previous < pagination.firstId) {
            return pagination.lastId;
        }
        return previous
    }

    getRightId() {
        let previous = pagination.currentId + 1;
        if (previous > pagination.lastId) {
            return pagination.firstId;
        }
        return previous
    }

    findCurrentObj(obj, selected) {
        const parent = $(obj).parent();
        return parent.find(`[unique_id=${selected}]`);
    }

    goRight(obj) {
        const new_selected_id = pagination.getRightId();
        this.go(new_selected_id, obj);
    }

    goLeft(obj) {
        const new_selected_id = pagination.getLeftId();
        console.log(new_selected_id);
        this.go(new_selected_id, obj);
    }

    go(id, obj) {
        const new_selected = pagination.findCurrentObj(obj, id);
        this.prepareToChange();
        this.changeToNew(new_selected);
    }

    prepareToChange() {
        this.selectedObj.removeClass("transaction-show").addClass("transition-hide");
    }

    changeToNew(new_selected) {
        setTimeout(() => {
            this.selectedObj.addClass("remove-circle");
            new_selected.removeClass("remove-circle").addClass('transaction-show').removeClass("transition-hide");
            pagination.selectedObj = new_selected;
            pagination.currentId = pagination.getUniqueId(new_selected);
        }, 600)
    }
}

const pagination = new Pagination_with_controller(".pagination-get");
$(".carousel-control-prev").click(
    function () {
        pagination.goLeft(this)
    }
)
$(".carousel-control-next").click(
    function () {
        pagination.goRight(this);
    }
)
setTimeout(() => pagination.goRight($(".carousel-control-prev")[0]), 8000);

