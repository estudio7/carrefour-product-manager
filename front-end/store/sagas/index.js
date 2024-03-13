import { call, put, takeEvery } from 'redux-saga/effects';
import axios from 'axios';

function* fetchProducts() {
    try {
        const products = yield call(axios.get, 'http://localhost:8000/api/products');
        yield put({ type: 'FETCH_PRODUCTS_SUCCESS', products: products.data });
    } catch (e) {
        yield put({ type: 'FETCH_PRODUCTS_FAILED', message: e.message });
    }
}

function* productSaga() {
    yield takeEvery('FETCH_PRODUCTS', fetchProducts);
}

export default productSaga;
