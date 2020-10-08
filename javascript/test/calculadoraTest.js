var chai =require('chai');
var assert = chai.assert;
var expect = chai.expect;
var guitarra = require('../validar-guitarra');

describe('Testing assert function: ',function(){
  describe('Check addTest Function', function(){
	it('Check the returned value using : assert,equal(value, value): ', function(){
		result= guitarra.addTest(1,1);
		assert.equal(result, 2);
	});
  });
})