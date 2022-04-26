
/**
 * 
 * @param {string} date 
 * @returns string
 */
function date_pt_en(date) {
    let date_array = date.trim().split("/");
    return `${date_array[2]}-${date_array[1]}-${date_array[0]}`;
}

/**
 * @param {string} date 
 * @returns string
 */
function date_en_pt(date) {
    let date_array = date.trim().split("-");
    return `${date_array[0]}/${date_array[1]}/${date_array[2]}`;
}