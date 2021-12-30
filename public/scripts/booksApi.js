class BooksApi {
    constructor() {
        this.books = null;
    }
    //async function to get API and return data in promise
    async initApi(url) {
        let thisData = new Promise(function(done, fail) {
            let settings = {
                "async": true,
                "crossDomain": true,
                "url": url,
                "method": "GET",
            };
            $.get(settings, function(dataPromise) {
                if (dataPromise) {
                    this.books = dataPromise;
                    return done(dataPromise);
                }else {
                    return fail(err);
                }
            })
        });
        return thisData;
    }
}