d_visualize.actions['POP_EDIT_HISTORY'] = function (context, payload) {
	context.commit('POP_EDIT_HISTORY', payload);
};
d_visualize.actions['PUSH_EDIT_HISTORY'] = function (context, payload) {
	context.commit('PUSH_EDIT_HISTORY', payload);
};
d_visualize.actions['PUSH_IFRAME_HISTORY'] = function (context, payload) {
	context.commit('PUSH_IFRAME_HISTORY', payload);
};